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

Route::view('/','welcome');
Route::view('/admin','admin.index');
Route::view('/admin/createcontent','admin.create');
Route::view('/admin/editcontent','admin.edit');
Route::view('/admin/deletecontent','admin.delete');
// project
Route::get('/admin/project','ProjectsController@index');
Route::get('/admin/project/create','ProjectsController@create');
Route::get('/admin/project/{project}','ProjectsController@show');
Route::get('/admin/project/{project}/edit','ProjectsController@edit');
Route::post('/admin/project/store','ProjectsController@store');
Route::delete('/admin/project/{project}','ProjectsController@destroy');
Route::patch('/admin/project/{project}','ProjectsController@update');



// team
Route::get('/admin/team','TeamsController@index');
Route::get('/admin/team/create','TeamsController@create');
Route::post('/admin/team/store','TeamsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
