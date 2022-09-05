<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;

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

Route::get('/signin',[login :: class,'index']);
Route::get('/signup',[login :: class,'signup']);
Route::post('/create',[login :: class,'savedata']);

Route::post('/login',[login::class,'login']);

Route::get('/user/{name}', function ($name) {
    return view ('user')->with('name',$name);
});
