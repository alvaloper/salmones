<?php

namespace App\Http\Controllers\Faultrecords;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\faultrecords;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Faultrecords\FaultrecordsNewRequest;
use App\Http\Requests\Faultrecords\FaultrecordsUpdateRequest;
use App\Http\Requests;

class FaultrecordsController extends Controller
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

        $faultrecords = faultrecords::Paginate(15);

        $userc = User::all();
        return view('faultrecords.index', array('faultrecords'=> $faultrecords, 'userc'=> $userc));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $roles = Role::all()->pluck('slug','id');

        return view('faultrecords.create')->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(FaultrecordsNewRequest $request)
    {

        $faultrecords = new Faultrecords();
        $faultrecords->faultdate = $request->input('faultdate');
        $faultrecords->faulthour = $request->input('faulthour');
        $faultrecords->fault = $request->input('fault');
        $faultrecords->enddate = $request->input('enddate');
        $faultrecords->endhour = $request->input('endhour');
        $faultrecords->solution = $request->input('solution');
        $faultrecords->user_id = $request->input('user_id');
        
        $faultrecords->save(); 
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('faultrecords.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($idfault)
    {

        $faultrecords = Faultrecords::find($idfault);

        return view('faultrecords.edit', array('faultrecords' => $faultrecords ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(FaultrecordsUpdateRequest $request, $idfault)
    {

        $faultrecords = Faultrecords::find($idfault);
        $faultrecords->faultdate = $request->input('faultdate');
        $faultrecords->faulthour = $request->input('faulthour');
        $faultrecords->fault = $request->input('fault');
        $faultrecords->enddate = $request->input('enddate');
        $faultrecords->endhour = $request->input('endhour');
        $faultrecords->solution = $request->input('solution');
        $faultrecords->user_id = $request->input('user_id');

        $faultrecords->save();
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('faultrecords.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idfault)
    {

        $faultrecords = Faultrecords::find($idfault);

        flash('El registro ha sido eliminado')->success()->important();
        Faultrecords::destroy($idfault);
        
        return redirect()->route('faultrecords.index');

    }
}
