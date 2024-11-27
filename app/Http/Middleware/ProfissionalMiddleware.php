<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProfissionalMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está logado e se o papel é 'profissional'
        if (auth()->check() && auth()->user()->role == 'profissional') {
            return $next($request); // Se for profissional, permite o acesso
        }

        // Se não for, redireciona para a página inicial ou alguma outra página
        return redirect()->route('home')->with('error', 'Acesso restrito. Profissionais apenas.');
    }
}
