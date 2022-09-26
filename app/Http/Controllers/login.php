<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class login extends Controller
{
    public function SignIn(){
        return view ('signin');
    }
    public function signup(){
        return view ('signup');
    }
    public function savedata(Request $request)
    {
        // echo "<pre>";
        // print_r($request -> all());
        $user=new user;
        $user->name =$request['name'];
        $user->LastName =$request['LastName'];
        $user->Status ="0";
        $user->Points ="0";
        $user->ShowName =$request['ShowName'];
        $user->Email =$request['Email'];
        $user->Country =$request['Country'];
        $user->DoB =$request['DOB'];
        // $user->gender =$request['Gender'];
        $user->gender ="M";
        $user->Password =md5($request['Gender']);
        $user->save();
        return redirect ('user/'.$request['ShowName']);
    }


    /////////////////////////////////////////////////////////////////////////////
    public function login(Request $request){
        // echo "<pre>";
        // print_r($request -> all());
        return redirect ('user/'.$request['email']);
    }
    ///////////////////////////////////////////////////////////////////////////////
   
}
