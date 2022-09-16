<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class note extends Controller
{
    public function edit($name , $note_id){
        // return "heading id edit page {$name} and heading id is {$note_id}";
        return view ("note")->with('name',$name)->with('note_id',$note_id);
    }
}
