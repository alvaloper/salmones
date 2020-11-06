<?php

namespace App\Http\Controllers\Queries;

use Illuminate\Http\Request;


use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\faultrecords;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Faultrecords\FaultrecordsNewRequest;
use App\Http\Requests\Faultrecords\FaultrecordsUpdateRequest;
use App\Http\Requests;

class QueriesfaultController extends Controller
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
        return view('queries.faultsrecords.index', array('faultrecords'=> $faultrecords, 'userc'=> $userc));

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $faultrecords = faultrecords::where('faultdate', 'LIKE', '%'.$request->get('search').'%')
            ->paginate(15);
        $userc = User::all();
        flash('La búsqueda ha sido exitosa')->success()->important();
        return view('queries.faultsrecords.index', array('faultrecords'=> $faultrecords, 'userc'=> $userc));

    }
}
