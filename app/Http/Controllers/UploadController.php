<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
    // Validação do arquivo
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        // Salvar o arquivo
        if ($request->file('photo')) {
            $path = $request->file('photo')->store('photos', 'public'); // Armazenar na pasta "storage/app/public/photos"
            
            // Salvar o caminho no banco de dados
            $foto = new Foto(); // Substitua por seu modelo
            $foto->source = $path; // Salve o caminho no atributo do modelo
            $foto->save();
            
            return back()->with('success', 'Foto enviada com sucesso!');
        }

        return back()->with('error', 'Erro ao enviar a foto.');
}
}