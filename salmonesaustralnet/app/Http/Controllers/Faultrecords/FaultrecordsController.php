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

            $x1 = $request->input('faultdate');
            $fname1 = time().$x1.$file1->getClientOriginalName();
            
            $file1->move(public_path().'/images',$fname1);
        }
        else
        {
            $fname1 = 'nonpicture.jpg';
        }

        //File2
        if ($request->hasfile('file2')){
            $file2 = $request->file('file2');
            $x2 = $request->input('faultdate');
            $fname2 = time().$x2.$file2->getClientOriginalName();
            $file2->move(public_path().'/images',$fname2);
        } 
        else
        {
            $fname2 = 'nonpicture.jpg';
        }

        //File3
        if ($request->hasfile('file3')){
            $file3 = $request->file('file3');
            $x3 = $request->input('faultdate');
            $fname3 = time().$x3.$file3->getClientOriginalName();
            $file3->move(public_path().'/images',$fname3);
        } 
        else
        {
            $fname3 = 'nonpicture.jpg';
        }

        //File4
        if ($request->hasfile('file4')){
            $file4 = $request->file('file4');
            $x4 = $request->input('faultdate');
            $fname4 = time().$x4.$file4->getClientOriginalName();
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
        if ($request->hasfile('fileNew1')){
            $file1 = $request->file('fileNew1');
            $x1 = $request->input('faultdate');
            $fname1 = time().$x1.$file1->getClientOriginalName();
            $file1->move(public_path().'/images',$fname1);

            $y1 = $request->input('file1');
            if ($y1!='nonpicture.jpg')
                unlink(public_path().'/images/'.$y1);
        }
        else
        {
            $fname1 = $request->input('file1');
        }

        //File2
        if ($request->hasfile('fileNew2')){
            $file2 = $request->file('fileNew2');
            $x2 = $request->input('faultdate');
            $fname2 = time().$x2.$file2->getClientOriginalName();
            $file2->move(public_path().'/images',$fname2);

            $y2 = $request->input('file2');
            if ($y2!='nonpicture.jpg')
                unlink(public_path().'/images/'.$y2);
        } 
        else
        {
            $fname2 = $request->input('file2');
        }

        //File3
        if ($request->hasfile('fileNew3')){
            $file3 = $request->file('fileNew3');
            $x3 = $request->input('faultdate');
            $fname3 = time().$x3.$file3->getClientOriginalName();
            $file3->move(public_path().'/images',$fname3);

            $y3 = $request->input('file3');
            if ($y3!='nonpicture.jpg')
                unlink(public_path().'/images/'.$y3);
        } 
        else
        {
            $fname3 = $request->input('file3');
        }

        //File4
        if ($request->hasfile('fileNew4')){
            $file4 = $request->file('fileNew4');
            $x4 = $request->input('faultdate');
            $fname4 = time().$x4.$file4->getClientOriginalName();
            $file4->move(public_path().'/images',$fname4);

            $y4 = $request->input('file4');
            if ($y4!='nonpicture.jpg')
                unlink(public_path().'/images/'.$y4);
        } 
        else
        {
            $fname4 = $request->input('file4');
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
        //$y1 = 'xyz.jpg';
        $y1 = $faultrecords->file1;
        $y2 = $faultrecords->file2;
        $y3 = $faultrecords->file3;
        $y4 = $faultrecords->file4;

        if (($y1) <> 'nonpicture.jpg')
        {

        unlink(public_path().'/images/'.$y1);

        }

        if (($y2) <> 'nonpicture.jpg')
        {

        unlink(public_path().'/images/'.$y2);

        }

        if (($y3) <> 'nonpicture.jpg')
        {

        unlink(public_path().'/images/'.$y3);

        }
        
        if (($y4) <> 'nonpicture.jpg')
        {

        unlink(public_path().'/images/'.$y4);

        }
        

        flash('El registro ha sido eliminado')->success()->important();
        Faultrecords::destroy($idfault);
        
        return redirect()->route('faultrecords.index');

    }
}
