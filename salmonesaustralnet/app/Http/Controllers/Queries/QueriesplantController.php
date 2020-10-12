<?php

namespace App\Http\Controllers\Queries;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;

use App\Http\Controllers\Controller;
use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;

use App\User;
use App\plantrecords;
use App\plants;

use App\Http\Requests\Plantrecords\PlantrecordsNewRequest;
use App\Http\Requests\Plantrecords\PlantrecordsUpdateRequest;
use App\Http\Requests;

class QueriesplantController extends Controller
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
        $plants = plants::all();
        $userc = User::all();
        $plantx = plants::pluck('nameplant','idplant');
        return view('queries.plantsrecords.index', compact('plantx'), array('plantrecords'=> $plantrecords, 'plants' => $plants, 'userc'=> $userc));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $plantrecords = plantrecords::where('dateplant', 'LIKE', '%'.$request->get('search').'%')
            ->Where('plant_id', 'LIKE', '%'.$request->get('search1').'%')
            ->paginate(5);
        $plants = plants::all();
        $userc = User::all();
        $plantx = plants::pluck('nameplant','idplant');
        return view('queries.plantsrecords.index', compact('plantx'), array('plantrecords'=> $plantrecords, 'plants' => $plants, 'userc'=> $userc));

    }
}
