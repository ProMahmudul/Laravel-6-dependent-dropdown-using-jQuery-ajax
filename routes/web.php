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


Route::get('/', 'TestController@country');
Route::get('/json-divisions/{id}', 'TestController@divisions');
Route::get('/json-districts/{id}', 'TestController@districts');
Route::get('/json-upazilas/{id}', 'TestController@upazilas');