<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index(){
        return view ('signin');
    }
    public function signup(){
        return view ('signup');
    }
    public function savedata(Request $request)
    {
        echo "<pre>";
        print_r($request -> all());
    }
    public function login(Request $request){
        echo "<pre>";
        print_r($request -> all());
        return('This is log in page');
    }
    ///////////////////////////////////////////////////////////////////////////////
   
}
