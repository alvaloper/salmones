<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/plants', function () {
    //return view('plants.index','PlantsController@index');
    return view('users.index');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

/**
 * Ruta con el prefijo admin para el controlador RolesController, se mostraran las rutas como el siguiente
 * Ejemplo: el prefijo admin se refiere que solo tienen acceso los difinidos en el grupo Admin
 * http://aplicacion.app/admin/roles
 * http://aplicacion.app/admin/roles/{role}/edit donde {role} es una variable numerica 1,2,3.... n
 *
 */

Route::group(['prefix' => 'admin', 'namespace' => 'Seguridad'], function () {

    Route::resource('roles', 'RolesController');
    Route::resource('permisos', 'PermissionsController');
});

Route::group(['prefix' => 'admin2', 'namespace' => 'Seguridad'], function () {
    Route::get('roles','PermissionsRolesController@index');
    Route::get('roles/asignar','PermissionsRolesController@asignar');
    Route::get('roles/desasignar','PermissionsRolesController@desasignar');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Modulos'], function () {

    Route::get('modulos', 'ModulosController@seguridad');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Plants'], function () {

    Route::resource('plants', 'PlantsController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Centers'], function () {

    Route::resource('centers', 'CentersController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Plantrecords'], function () {

    Route::resource('plantrecords', 'PlantrecordsController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'User'], function () {

    Route::resource('users', 'UsersController');
});

