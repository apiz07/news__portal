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

Route::group([ 'prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'auth'],function(){

    Route::get('dashboard',         [ 'as'=> 'dashboard', 'uses' => 'Admin\DashboardController@index']);
    Route::get('test',              [ 'as'=> 'test',      'uses' => 'Admin\DashboardController@test']);
    Route::get('user',              [ 'as'=> 'user',      'uses' => 'Admin\UserController@index']);
    Route::get('user/add',          [ 'as'=> 'user.add',  'uses' => 'Admin\UserController@add']);
    Route::get('user/store',        [ 'as'=> 'user.store',  'uses' => 'Admin\UserController@store']);
    Route::get('user/edit/{id}',    [ 'as'=> 'user.edit',  'uses' => 'Admin\UserController@edit']);
    Route::get('user/update/{id}',  [ 'as'=> 'user.update',  'uses' => 'Admin\UserController@update']);
    Route::get('user/delete/{id}',  [ 'as'=> 'user.delete',  'uses' => 'Admin\UserController@delete']);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
