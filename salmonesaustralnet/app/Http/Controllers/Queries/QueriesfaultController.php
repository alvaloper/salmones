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

        $faultrecords = faultrecords::Paginate(5);

        $userc = User::all();
        return view('faultrecords.index', array('faultrecords'=> $faultrecords, 'userc'=> $userc));

    }


    public function search(Request $request){

    }
}
