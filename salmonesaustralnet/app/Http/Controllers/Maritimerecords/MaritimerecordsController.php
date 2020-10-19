<?php

namespace App\Http\Controllers\Maritimerecords;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\maritimerecords;
use App\centers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Maritimerecords\MaritimerecordsNewRequest;
use App\Http\Requests\Maritimerecords\MaritimerecordsUpdateRequest;
use App\Http\Requests;

class MaritimerecordsController extends Controller
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

        $maritimerecords = maritimerecords::Paginate(10);
        $centersx = centers::all();
        $userc = User::all();
        return view('maritimerecords.index', array('maritimerecords'=> $maritimerecords, 'centersx' => $centersx, 'userc'=> $userc));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $roles = Role::all()->pluck('slug','id');
        $centersx = centers::pluck('namecenter','idcenter');
        return view('maritimerecords.create', compact('centersx'))->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(MaritimerecordsNewRequest $request)
    {

        $maritimerecords = new Maritimerecords();
        $maritimerecords->turn = $request->input('turn');
        $maritimerecords->datemarine = $request->input('datemarine');
        $maritimerecords->landfallhour = $request->input('landfallhour');
        $maritimerecords->marineevent = $request->input('marineevent');
        $maritimerecords->center_id = $request->input('center_id');
        $maritimerecords->user_id = $request->input('user_id');
        $maritimerecords->save();
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('maritimerecords.index');
        
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

    public function edit($idmarinerecord)
    {

        $maritimerecords = Maritimerecords::find($idmarinerecord);

        $centersx = centers::pluck('namecenter','idcenter');

        return view('maritimerecords.edit', compact('centersx'), array('maritimerecords' => $maritimerecords ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(MaritimerecordsUpdateRequest $request, $idmarinerecord)
    {

        $maritimerecords = Maritimerecords::find($idmarinerecord);
        $maritimerecords->turn = $request->input('turn');
        $maritimerecords->datemarine = $request->input('datemarine');
        $maritimerecords->landfallhour = $request->input('landfallhour');
        $maritimerecords->marineevent = $request->input('marineevent');
        $maritimerecords->center_id = $request->input('center_id');
        $maritimerecords->user_id = $request->input('user_id');
        $maritimerecords->save();
        flash('El registro ha sido modificado.')->success()->important();
        return redirect()->route('maritimerecords.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idmarinerecord)
    {

        $maritimerecords = Maritimerecords::find($idmarinerecord);
        flash('El registro ha sido eliminado')->success()->important();
        Maritimerecords::destroy($idmarinerecord);
        return redirect()->route('maritimerecords.index');

    }
}
