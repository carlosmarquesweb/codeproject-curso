<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('client','ClientController@index');
Route::post('client','ClientController@store');
Route::get('client/{id}','ClientController@show');
Route::post('client/{id}','ClientController@update');
Route::delete('client/{id}','ClientController@destroy');
