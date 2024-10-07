<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Método para mostrar a página de login
    public function showLoginForm()
    {
        return view('login'); 
    }

    // Método para lidar com o login
    public function login(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Verifica se o usuário existe no banco de dados
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Você não tem permissão para acessar.',
            ]);
        }

        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redireciona para a página desejada após login
            return redirect()->intended('dashboard'); // Altere 'dashboard' para a rota que desejar
        }

        // Se as credenciais falharem, redireciona de volta
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    // Método para logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redireciona para a página de login após logout
    }
}

