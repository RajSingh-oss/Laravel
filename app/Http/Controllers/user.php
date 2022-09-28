<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class user extends Controller
{
    //
    public function save(){
        // echo "<pre>";
        // print_r($request -> all());

        return view ('signup');
    }
    public function userpage($name){
        $note = DB::select('select * from notes');
        return view ('user',['note'=>$note])->with('name',$name);
    }
}

