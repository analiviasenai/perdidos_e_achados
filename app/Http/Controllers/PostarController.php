<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostarController extends Controller
{
    public function create()
    {
        return view('postar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => ['required'],
            'descricao' => ['required'],
            'airline' => ['required']
        ]);

        $user = Auth::user();

        $idUser = $user->id;
        $foto = new Foto();
        $foto->source = $request->img;
        $foto->descricao = $request->descricao;
        $foto->airline = $request->airline;
        $foto->user()->associate($idUser); 
       
        
        $foto->save();


        return redirect()->route('home')->with('Sucesso', 'Foto postada!');
    }
}
