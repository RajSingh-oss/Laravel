<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index(){
        return view ('signin');
    }
    public function showdata(Request $request)
    {
        echo "<pre>";
        print_r($request -> all());
        // return ("show data");
    }
}
