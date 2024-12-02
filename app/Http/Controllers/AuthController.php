<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     // Função para exibir o formulário de cadastro
     public function showRegisterForm()
     {
         return view('auth.register'); // Retorna a view do formulário de cadastro
     }
 
     // Função para processar o cadastro do usuário
     public function store(Request $request)
     {
         // Validação dos dados do formulário
         $request->validate([
             'nome_completo' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
             'senha' => 'required|min:6|confirmed', // Confirmação de senha
         ]);
 
         // Criação do usuário
         $user = User::create([
             'nome_completo' => $request->nome_completo,
             'email' => $request->email,
             'senha' => Hash::make($request->senha), // Criptografa a senha
         ]);
 
         // Realiza login do usuário após o cadastro
         Auth::login($user);
 
         // Redireciona para a página inicial ou onde você desejar
         return redirect()->route('home');
     }
 
     // Função para exibir o formulário de login
     public function showLoginForm()
     {
         return view('auth.login'); // Retorna a view do formulário de login
     }
 
     // Função para processar o login
     public function login(Request $request)
     {
         // Validação dos dados do formulário de login
         $request->validate([
             'email' => 'required|email',
             'senha' => 'required|min:6',
         ]);
 
         // Tenta autenticar o usuário
         if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
             // Redireciona para a página inicial ou onde você desejar após login bem-sucedido
             return redirect()->route('Home.index');
         } else {
             // Caso o login falhe, redireciona de volta com erro
             return back()->withErrors(['email' => 'Credenciais incorretas']);
         }
     }
 
     // Função para deslogar o usuário
     public function logout()
     {
         Auth::logout();
         return redirect()->route('login'); // Redireciona para a página de login após logout
     }
}
