<?php

namespace App\Http\Controllers\Queries;

use Illuminate\Http\Request;

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

class QueriescenterController extends Controller
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

        $maritimerecords = maritimerecords::Paginate(15);
        $centersx = centers::all();
        $userc = User::all();
        $centers = centers::pluck('namecenter','idcenter');
        return view('queries.centersrecords.index', compact ('centers'), array('maritimerecords'=> $maritimerecords, 'centersx' => $centersx, 'userc'=> $userc));

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $maritimerecords = maritimerecords::where('datemarine', 'LIKE', '%'.$request->get('search').'%')
            ->Where('center_id', 'LIKE', '%'.$request->get('search1').'%')
            ->paginate(15);
        $centersx = centers::all();
        $userc = User::all();
        $centers = centers::pluck('namecenter','idcenter');
        flash('La búsqueda ha sido exitosa')->success()->important();
        return view('queries.centersrecords.index', compact ('centers'), array('maritimerecords'=> $maritimerecords, 'centersx' => $centersx, 'userc'=> $userc));

    }
}
