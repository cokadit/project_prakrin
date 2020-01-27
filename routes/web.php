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

// team
Route::get('/admin/team','TeamsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
