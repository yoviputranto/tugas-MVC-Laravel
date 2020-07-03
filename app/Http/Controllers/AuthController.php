<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function welcome(request $request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name']; 
        return view('welcome', ['first_name'=>$first_name, 'last_name'=>$last_name]);
    }
    //
}
