<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('manage')->middleware('role:superadministrator|user')->group(function(){
	Route::get('/','ManageController@index');
	Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users','UserController');
	Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
	Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
	Route::resource('/posts', 'PostController');
});

Route::get('/test', function() {
	
	$user = App\User::findOrFail(3);
	dd($user); 
});

/**
* Routes to define *
Route::get('/controller', 'PostController') will call any methedo defined in controller;
Route::resource('/controller', 'PostController') will call the index method;
**/
Route::get('/home', 'HomeController@index')->name('home');

