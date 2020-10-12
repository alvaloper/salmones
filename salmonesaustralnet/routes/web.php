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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'user', 'namespace' => 'Queries'], function () {

    Route::get('/queries/plants', ['as' => 'queries.plantsrecords.index','uses' => 'QueriesplantController@index']);

    Route::get('/queries/plants/search',['as' => 'queries.plantsrecords.search','uses' => 'QueriesplantController@search']);

    Route::get('/queries/centers', ['as' => 'queries.plantsrecords.index','uses' => 'QueriescenterController@index']);

    Route::get('/queries/centers/search',['as' => 'queries.plantsrecords.search','uses' => 'QueriescenterController@search']);

    Route::get('/queries/faults', ['as' => 'queries.plantsrecords.index','uses' => 'QueriesfaultController@index']);

    Route::get('/queries/faults/search',['as' => 'queries.plantsrecords.search','uses' => 'QueriesfaultController@search']);

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

Route::group(['prefix' => 'admin', 'namespace' => 'Faultrecords'], function () {

    Route::resource('faultrecords', 'FaultrecordsController');

});

Route::group(['prefix' => 'admin', 'namespace' => 'Maritimerecords'], function () {

    Route::resource('maritimerecords', 'MaritimerecordsController');

});

Route::group(['prefix' => 'admin', 'namespace' => 'User'], function () {

    Route::resource('users', 'UsersController');
    
});

