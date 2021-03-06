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
Route::get('/register', function () {
    return view('welcome');
});


Route::get('/tsg-data', function () {
    return view('data.create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data-capture', 'DataController@create')->name('home');
Route::get('/data-view', 'DataController@index')->name('home');
Route::get('/data-search/{id}', 'DataController@show')->name('home');

Route::post('/store-file', 'FileController@store');
Route::get('/new-file', 'FileController@create');
Route::get('/get-files', 'FileController@getfiles');
Route::get('/view-files', 'FileController@read');
Route::get('/destroy-file/{id}', 'FileController@filedesroy');
Route::get('/see-file/{id}', 'FileController@viewfiles');

Route::post('/report-concerns', 'EssController@reportstore');
Route::get('/new-concerns', 'HomeController@system');
Route::get('/new-reports', 'EssController@concerns');
Route::get('/read-reports', 'EssController@concernscomplete');
Route::get('/mark-read/{id}', 'EssController@read');


Route::get('/report', 'MttrController@report');
Route::get('/report-view', 'MttrController@reportview');
Route::post('/report-mttr', 'MttrController@reportstore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//System Registration
Route::get('/system', 'MttrController@system');
Route::post('/system-store', 'MttrController@systemstore');
Route::get('/chart/{id}', 'MttrController@makeChart');
Route::get('/audits', 'MttrController@auditrail');
//Region Routes
Route::get('/region', 'MttrController@region');
Route::get('/region/{id}/{action}', 'MttrController@regionedit');
Route::post('/region-store', 'MttrController@regionstore');

//permissions and Roles
Route::resource('admin', 'UserController');
Route::resource('roles', 'RoleController');
//roles RouteServiceProvider
Route::get('/roles_index','RoleController@index');
Route::get('/roles_create','RoleController@create');
Route::post('/roles_store','RoleController@store');
Route::post('/roles_update/{id}','RoleController@update');
Route::post('/roles_destroy/{id}','RoleController@destroy');
Route::post('/roles_edit/{id}','RoleController@edit');
Route::post('/roles_show/{id}','RoleController@show');

Route::get('/profile','HomeController@profile');
Route::post('/profileupdate','HomeController@profileupdate');
//permissions and Roles
Route::get('/user_index','UserController@index');
Route::get('/user_create','UserController@create');
Route::get('/users_create','UserController@create');
Route::post('/user_stores','UserController@storez');
Route::post('/user_store','UserController@store');
Route::post('/user_update/{id}','UserController@update');
Route::post('/user_destroy/{id}','UserController@destroy');
Route::post('/user_edit/{id}','UserController@edit');
Route::post('/user_show/{id}','UserController@show');

//permissions and Roles
Route::get('/permissions_index','PermissionController@index');
Route::get('/permission_create','PermissionController@create');
Route::post('/permissions_store','PermissionController@store');
Route::post('/permissions_update/{id}','PermissionController@update');
Route::post('/permissions_destroy/{id}','PermissionController@destroy');
Route::post('/permission_edit/{id}','PermissionController@edit');
Route::post('/permission_show/{id}','PermissionController@show');
Route::resource('/permissions', 'PermissionController');