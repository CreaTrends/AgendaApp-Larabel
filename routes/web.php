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
Route::prefix('manage')->middleware('role:superadministrator|administrator|user|teacher|parent')->group(function(){
	Route::get('/','ManageController@index');
	Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users','UserController');
	Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
	Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
	Route::resource('/posts', 'PostController');
	Route::resource('/rooms', 'RoomsController', ['except' => 'destroy']);

});
/*Route::group(['prefix' => 'manage', 'middleware' => ['role:parent']], function() {
    Route::get('/', 'ParentController@index');
    Route::resource('/dashboard')->middleware('role:parent');
});*/

/**
* Routes to define *
Route::get('/controller', 'PostController') will call any methedo defined in controller;
Route::resource('/controller', 'PostController') will call the index method;
**/
/**
* Middleware
* Middleware on route GROUP is the same on construct controller
**/
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sendemail', function () {

    $data = array(
        'name' => "Curso Laravel",
    );

    \Mail::send('mail.test', $data, function ($message) {

        $message->from('jalbornozdesign@gmail.com', 'Curso Laravel');

        $message->to('jalbornozdesign@gmail.com')->subject('test email Curso Laravel');

    });

    return "Tú email ha sido enviado correctamente";

});

