<?php

namespace App\Http\Controllers\Plants;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\plants;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Plants\PlantsNewRequest;
use App\Http\Requests\Plants\PlantsUpdateRequest;
use App\Http\Requests;

class PlantsController extends Controller
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

        $plants = Plants::paginate(6);
        $users = User::paginate(6);
        $plants = Plants::all();
        return view('plants.index', array('users'=> $users, 'plants'=> $plants));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $roles = Role::all()->pluck('slug','id');
        return view('plants.create')->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PlantsNewRequest $request)
    {

        $plants = new Plants();
        $plants->nameplant = $request->input('nameplant');
        $plants->save();
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('plants.index');
        
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

    public function edit($idplant)
    {

        $plants = Plants::find($idplant);
        return view('plants.edit', array('plants' => $plants ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(PlantsUpdateRequest $request, $idplant)
    {

        $plants = Plants::find($idplant);
        $plants->nameplant = $request->input('nameplant');
        $plants->save();
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('plants.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idplant)
    {

        $plants = Plants::find($idplant);
        flash('El registro ha sido eliminado')->success()->important();
        Plants::destroy($idplant);
        return redirect()->route('plants.index');

    }
}
