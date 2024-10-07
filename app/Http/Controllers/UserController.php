<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('login');
    }


    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        return redirect()->route('home');


    }
   
}
