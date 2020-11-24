<?php

namespace App\Http\Controllers\Queries;

use Illuminate\Http\Request;


use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use App\User;
use App\epagerecords;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;
use App\Http\Requests\Faultrecords\EpagerecordsNewRequest;
use App\Http\Requests\Faultrecords\EpagerecordsUpdateRequest;
use App\Http\Requests;

class QueriesepageController extends Controller
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

        $epagerecords = epagerecords::Paginate(15);

        $userc = User::all();
        return view('queries.epagesrecords.index', array('epagerecords'=> $epagerecords, 'userc'=> $userc));

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $epagerecords = epagerecords::where('epagedate', 'LIKE', '%'.$request->get('search').'%')
            ->paginate(15);
        $userc = User::all();
        flash('La búsqueda ha sido exitosa en la fecha seleccionada.')->success()->important();
        return view('queries.epagesrecords.index', array('epagerecords'=> $epagerecords, 'userc'=> $userc));

    }
}
