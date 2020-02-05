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
// project
Route::get('/admin/project','ProjectsController@index');
Route::get('/admin/project/create','ProjectsController@create');
Route::get('/admin/project/{project}','ProjectsController@show');
Route::get('/admin/project/{project}/edit','ProjectsController@edit');
Route::post('/admin/project/store','ProjectsController@store');
Route::delete('/admin/project/{project}/','ProjectsController@destroy');
Route::patch('/admin/project/{project}','ProjectsController@update');

// ratri
Route::get('/ratriprakrin','RatriController@index');
Route::get('/ratrislider','RatriController@slider')->name('slider');




// team
Route::get('/admin/team','TeamsController@index');
Route::get('/admin/team/create','TeamsController@create');
Route::get('/admin/team/{team}','TeamsController@show');
Route::get('/admin/team/{team}/edit','TeamsController@edit');
Route::post('/admin/team/store','TeamsController@store');
Route::delete('/admin/team/{team}','TeamsController@destroy');
Route::patch('/admin/team/{team}','TeamsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
