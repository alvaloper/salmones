<?php

namespace App\Http\Controllers\Plantrecords;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\plantrecords;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Plantrecords\PlantrecordsNewRequest;
use App\Http\Requests\Plantrecords\PlantrecordsUpdateRequest;
use App\Http\Requests;

class PlantrecordsController extends Controller
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

        $plantrecords = plantrecords::Paginate(5);
        return view('plantrecords.index', array('plantrecords'=> $plantrecords));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $roles = Role::all()->pluck('slug','id');
        return view('plantrecords.create')->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PlantrecordsNewRequest $request)
    {

        $plantrecords = new Plantsrecord();
        $plantrecords->titlerecord = $request->input('titlerecord');
        $plantrecords->dateplant = $request->input('dateplant');
        $plantrecords->planthour = $request->input('planthour');
        $plantrecords->plantevente = $request->input('plantevente');
        $plantrecords->actionsevent = $request->input('actionsevent');
        $plantrecords->plant_id = $request->input('plant_id');
        $plantrecords->user_id = $request->input('user_id');
        $plantrecords->save();
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('plantrecords.index');
        
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

    public function edit($idplantrecord)
    {

        $plantrecords = Plantrecords::find($idplantrecord);
        return view('plantrecords.edit', array('plantrecords' => $plantrecords ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(PlantrecordsUpdateRequest $request, $idplantrecord)
    {

        $plantrecords = Plantrecord::find($idplantrecord);
        $plantrecords->titlerecord = $request->input('titlerecord');
        $plantrecords->dateplant = $request->input('dateplant');
        $plantrecords->planthour = $request->input('planthour');
        $plantrecords->plantevente = $request->input('plantevente');
        $plantrecords->actionsevent = $request->input('actionsevent');
        $plantrecords->plant_id = $request->input('plant_id');
        $plantrecords->user_id = $request->input('user_id');
        $plantrecords->save();
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('plantrecords.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idplantrecord)
    {

        $plantrecords = Plantrecords::find($idplantrecord);
        flash('El registro ha sido eliminado')->success()->important();
        Plantrecords::destroy($idplantrecord);
        return redirect()->route('plantrecords.index');

    }
}
