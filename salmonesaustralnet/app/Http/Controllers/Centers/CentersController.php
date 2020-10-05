<?php

namespace App\Http\Controllers\Centers;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\centers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Centers\CentersNewRequest;
use App\Http\Requests\Centers\CentersUpdateRequest;
use App\Http\Requests;

class CentersController extends Controller
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

        $centers = centers::Paginate(5);
        return view('centers.index', array('centers'=> $centers));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $roles = Role::all()->pluck('slug','id');
        return view('centers.create')->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CentersNewRequest $request)
    {

        $centers = new Centers();
        $centers->namecenter = $request->input('namecenter');
        $centers->emergencyphone = $request->input('emergencyphone');
        $centers->boss = $request->input('boss');
        $centers->assistant = $request->input('assistant');
        $centers->save();
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('centers.index');
        
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

    public function edit($idcenter)
    {

        $centers = Centers::find($idcenter);
        return view('centers.edit', array('centers' => $centers ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(CentersUpdateRequest $request, $idcenter)
    {

        $centers = Centers::find($idcenter);
        $centers->namecenter = $request->input('namecenter');
        $centers->emergencyphone = $request->input('emergencyphone');
        $centers->boss = $request->input('boss');
        $centers->assistant = $request->input('assistant');
        $centers->save();
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('centers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idcenter)
    {

        $centers = Centers::find($idcenter);
        flash('El registro ha sido eliminado')->success()->important();
        Centers::destroy($idcenter);
        return redirect()->route('centers.index');

    }
}
