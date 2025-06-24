<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(){
        return view('users_login');
    }

    public function new(){
        return view('users_new_registration');
    }

    public function menu(){
        return view('menu');
    }

    public function add(Request $request){
        $post = new User();
        $post->user_name = $request->user_name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->save();

        return redirect()->route('login');

    }

}
