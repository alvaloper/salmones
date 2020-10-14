<?php

namespace App\Http\Controllers\User;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Users\UserNuevoRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Http\Requests;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::paginate(10);
        $permisos = Permission::all();
        return view('users.index', array('users'=> $users, 'permisos' => $permisos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $roles = Role::all()->pluck('slug','id');
;
        return view('users.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(UserNuevoRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->lastname  = $request->input('lastname');
        $user->email  = $request->input('email');
        $user->password  = Hash::make($request->input('password'));
        $user->remember_token = str_random(100);
        $user->save();
        /**
         * El Metodo attachRole Guarda el Rol_id en la tabla role_user con el user_id
         */
        $user->attachRole(Role::find(Input::get('rol')));
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::find($id);
        $userRole = $user->roles()->first();
        $user['rol'] = $userRole;
        $roles = Role::all()->pluck('slug','id');
        return view('users.edit', array('user' => $user, 'roles' => $roles ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UserUpdateRequest $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lastname  = $request->input('lastname');
        $user->password  =  Hash::make($request->input('password'));
        $user->remember_token = str_random(100);
        $user->save();
        /**
         * No es necesario eliminar la relacion con el
         * antiguo rol ya que la libreria permite tener multiples roles, pero
         * Para este caso en Particular nos interesa eliminar el rol anterior y
         * luego colocamos el nuevo Rol, para que solo un usuario tenga un solo rol.
         * Con el metodo detach eliminarmos el rol que tenga.
         */
        $user->roles()->detach();
        /**
         * El Metodo attachRole Guarda el Rol_id en la tabla role_user con el user_id
         */
        $user->attachRole(Role::find(Input::get('rol')));
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $user = User::find($id);
        User::destroy($id);
        flash('El registro ha sido eliminado')->success()->important();
        return redirect()->route('users.index');
    }
}
