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

//Route::get('/test', function(){
//    $arr = array(3, 5, 'Kamal', 'Dhaka');
//    return $arr;
//});
//
//Route::get('/abc', function(){
//    return "Abc  Route";
//});
//
//Route::get('/abc/cde', function(){
//    return "ABC CDE route";
//});
//
//Route::get('/something', function(){
//    return view('welcome');
//});
//
//Route::get('/issamoto', function(){
//    return view('inc.ab');
//});
//
//Route::get('/cd', function(){
//    return view('inc.another.cd');
//});
//
//Route::get('/ctest', 'TestController@abc');
//Route::get('/display', 'TestController@display');
//Route::get('/a', 'AbcController@test');
//
//Route::get('/user', 'TestController@userMethod');
//Route::get('/testname', 'TestController@testname')->name('user.test');

Route::get('/test/{para}', 'TestController@test');