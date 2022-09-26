<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    public function save(Request $request){
        echo "<pre>";
        print_r($request -> all());
        // return view ('signup');
    }
}
