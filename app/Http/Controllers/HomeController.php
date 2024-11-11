<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        $fotos = Foto::all();

        return view('home', compact('fotos'));
    }
   
}
