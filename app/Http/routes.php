<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');

Route::auth();

Route::get('activity/create/{id}', 'ActController@create');

Route::get('activity/edit/{id}/{year}', 'ActController@edit');

Route::get('activity/delete/{id}/{year}', 'ActController@delete');

Route::get('activity/{id}', 'ActController@index');

Route::get('activity/{id}/{year}', 'ActController@year');

Route::resource('staff', 'StaffController');