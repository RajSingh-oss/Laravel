<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home',function(){
    return("This is home page");
});
Route::match(['get', 'post'],'/post',function(){
    return("This is home page of Post");
});


use Illuminate\Http\Request;

Route::get('/user/{id?}', function  ($id =null) {
    return 'User '.$id;
});
