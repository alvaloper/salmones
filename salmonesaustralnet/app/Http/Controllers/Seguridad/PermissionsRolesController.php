<?php

namespace App\Http\Controllers\Seguridad;

use App\Models\Seguridad\Permission;
use App\Models\Seguridad\PermissionRole;
use App\Models\Seguridad\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class PermissionsRolesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $permisos;

    public function  __construct() {
        $this->middleware('auth');
        $permisos = Permission::all();
        $this->permisos = $permisos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Response::json($this->getPermisos(Input::get('id')));
    }

    private function getPermisos($id_rol){
        $permisos = array();

        $permisos['permisosAsignados'] = $this->getPermisosAsignados($id_rol);
        return $permisos;
    }

    private function getPermisosAsignados($id_rol){
        $permisosDeRol = PermissionRole::where('role_id', '=', $id_rol)->get();
        $asignados = array();
        foreach($permisosDeRol as $p){

            foreach ($this->permisos as $key => $value){
                if($value->id == $p->permission_id){
                    $asignados[] = $value;
                }
            }
        }

        return $asignados;
    }

    public function asignar(){
        $rol = Role::find(Input::get('role_id'));
        $rol->attachPermission(Input::get('permission_id'));
        return Response::json('ok');
    }

    public function desasignar(){
        $rol = Role::find(Input::get('role_id'));
        $rolPermisos = PermissionRole::where('role_id', '=', Input::get('role_id'))
            ->where('permission_id', '=', Input::get('permission_id'))->get()->first();
        $desasignar = PermissionRole::destroy($rolPermisos->id);
        return Response::json('ok');
    }
}