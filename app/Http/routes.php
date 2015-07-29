<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('user','UserController@index');
Route::post('user','UserController@store');
Route::get('user/{id}','UserController@show');
Route::put('user/{id}','UserController@update');
Route::delete('user/{id}','UserController@destroy');

Route::get('client','ClientController@index');
Route::post('client','ClientController@store');
Route::get('client/{id}','ClientController@show');
Route::put('client/{id}','ClientController@update');
Route::delete('client/{id}','ClientController@destroy');

Route::get('project','ProjectController@index');
Route::post('project','ProjectController@store');
Route::get('project/{id}','ProjectController@show');
Route::put('project/{id}','ProjectController@update');
Route::delete('project/{id}','ProjectController@destroy');
