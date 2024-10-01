<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class PostarController extends Controller
{
    public function create(){
        return view('postar');
    }

    public function store(Request $request){
        $request->validate([
            'img' => ['required'],
            'descricao' => ['required'],
            'airline' => ['required']
        ]);

        $foto = new Foto();
        $foto->source = $request->img;
        $foto->descricao = $request->descricao;
        $foto->airline = $request->airline;

        $foto->save();
        
        return redirect()->route('home')->with('sucesso', 'Foto postada!');
    }
}
