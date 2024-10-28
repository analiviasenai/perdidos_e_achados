<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
         // Obtém o usuário autenticado
         $user = Auth::user();

         // Verifica se o usuário não está autenticado ou não é "Ernesto" ou "Beatriz"
         if (!$user || !in_array($user->name, ['Ernesto', 'Beatriz'])) {
             return redirect('/'); // Redireciona para a página inicial
         }
        return $next($request);
    }
}
