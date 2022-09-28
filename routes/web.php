<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\user;
use App\Http\Controllers\noteCRUD;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/SignIn',[login :: class,'SignIn']);
Route::post('/Signin',[login :: class,'login']);
Route::get('/signup',[login :: class,'signup']);
Route::post('/user',[login :: class,'savedata']);



Route::get('/user/{name}/{note_id}', [noteCRUD :: class,'edit'] );


Route::post('/addNote',[noteCRUD :: class,'Addnote']);

Route::get('/user/{name}', [user:: class ,'userpage']);