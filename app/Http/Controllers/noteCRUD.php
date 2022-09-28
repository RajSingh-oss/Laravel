<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use DB;

class noteCRUD extends Controller
{
    public function edit($name , $note_id){
        // echo "this is ".$note_id;
        $dbnote = DB::select('select * from notes where id = '.$note_id);
        // echo "<pre>";
        // print_r($dbnote);
        return view ("note")->with('name',$name)->with('note',$dbnote);
    }
    
    public function Addnote(Request $request ){
        $dbnote = DB::select('select * from notes');
        echo "<pre>";
        print_r($dbnote);

        // print_r($request->all());

        $note=new note;
        $note->userId ='user id';
        $note->heading =$request['heading'];
        $note->note =$request['note'];
        $note->tag1 =$request['tag'];
        $note->tag2 =$request['tag'];
        $note->tag3 =$request['tag'];
        $note->remember_token =$request['_token'];
        $note->save();

        return redirect ('user/noteadd');
    }
}