<?php

namespace App\Http\Controllers\Epagerecords;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\epagerecords;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Epagerecords\EpagerecordsNewRequest;
use App\Http\Requests\Epagerecords\EpagerecordsUpdateRequest;
use App\Http\Requests;

class EpagerecordsController extends Controller
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


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(EpagerecordsNewRequest $request)
    {

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idfault)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($idfault)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(EpagerecordsUpdateRequest $request, $idfault)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($idfault)
    {

        $epagerecords = Epagerecords::find($idfault);
        $y1 = $epagerecords->file1;
        $y2 = $epagerecords->file2;
        $y3 = $epagerecords->file3;
        $y4 = $epagerecords->file4;

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
        Epagerecords::destroy($idfault);
        
        return redirect()->route('epagerecords.index');

    }
}
