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

        $faultrecords = faultrecords::Paginate(10);

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


        //SIRVE  return view('plantrecords.create', ['plantx', $plantx])->with('roles', $roles);
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

        //File1
        if ($request->hasfile('file1')){
            $file1 = $request->file('file1');
            $fname1 = time().$file1->getClientOriginalName();
            $file1->move(public_path().'/images',$fname1);
        }

        //File2
        if ($request->hasfile('file2')){
            $file2 = $request->file('file2');
            $fname2 = time().$file2->getClientOriginalName();
            $file2->move(public_path().'/images',$fname2);
        } 
        else
        {
            $fname2 = 'nonpicture.jpg';
        }

        //File3
        if ($request->hasfile('file3')){
            $file3 = $request->file('file3');
            $fname3 = time().$file3->getClientOriginalName();
            $file3->move(public_path().'/images',$fname3);
        } 
        else
        {
            $fname3 = 'nonpicture.jpg';
        }

        //File4
        if ($request->hasfile('file4')){
            $file4 = $request->file('file4');
            $fname4 = time().$file4->getClientOriginalName();
            $file4->move(public_path().'/images',$fname4);
        } 
        else
        {
            $fname4 = 'nonpicture.jpg';
        }


        $faultrecords = new Faultrecords();
        $faultrecords->faultdate = $request->input('faultdate');
        $faultrecords->faulthour = $request->input('faulthour');
        $faultrecords->fault = $request->input('fault');
        $faultrecords->enddate = $request->input('enddate');
        $faultrecords->endhour = $request->input('endhour');
        $faultrecords->solution = $request->input('solution');
        $faultrecords->user_id = $request->input('user_id');

        $faultrecords->file1 = $fname1;
        $faultrecords->file2 = $fname2;
        $faultrecords->file3 = $fname3;
        $faultrecords->file4 = $fname4;
        
        $faultrecords->save(); 
        flash('El registro ha sido agregado')->success()->important();
        return redirect()->route('faultrecords.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idfault)
    {
        
        $faultrecords = Faultrecords::find($idfault);

        return view('faultrecords.show', array('faultrecords' => $faultrecords )); 
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

        //File1
        if ($request->hasfile('file1')){
            $file1 = $request->file('file1');
            $fname1 = time().$file1->getClientOriginalName();
            $file1->move(public_path().'/images',$fname1);
        }

        //File2
        if ($request->hasfile('file2')){
            $file2 = $request->file('file2');
            $fname2 = time().$file2->getClientOriginalName();
            $file2->move(public_path().'/images',$fname2);
        } 
        else
        {
            $fname2 = 'nonpicture.jpg';
        }

        //File3
        if ($request->hasfile('file3')){
            $file3 = $request->file('file3');
            $fname3 = time().$file3->getClientOriginalName();
            $file3->move(public_path().'/images',$fname3);
        } 
        else
        {
            $fname3 = 'nonpicture.jpg';
        }

        //File4
        if ($request->hasfile('file4')){
            $file4 = $request->file('file4');
            $fname4 = time().$file4->getClientOriginalName();
            $file4->move(public_path().'/images',$fname4);
        } 
        else
        {
            $fname4 = 'nonpicture.jpg';
        }

        $faultrecords = Faultrecords::find($idfault);
        $faultrecords->faultdate = $request->input('faultdate');
        $faultrecords->faulthour = $request->input('faulthour');
        $faultrecords->fault = $request->input('fault');
        $faultrecords->enddate = $request->input('enddate');
        $faultrecords->endhour = $request->input('endhour');
        $faultrecords->solution = $request->input('solution');
        $faultrecords->user_id = $request->input('user_id');

        $faultrecords->file1 = $fname1;
        $faultrecords->file2 = $fname2;
        $faultrecords->file3 = $fname3;
        $faultrecords->file4 = $fname4;

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
