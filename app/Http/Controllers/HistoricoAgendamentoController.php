<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class HistoricoAgendamentoController extends Controller
{
       // Exibe o histórico de agendamentos
       public function index()
       {
           // Aqui, podemos buscar os agendamentos do usuário autenticado
           // Você pode adaptar para exibir todos ou agendamentos de um usuário específico
           $agendamentos = Agendamento::where('user_id', auth()->id())  // Para o usuário logado
                                        ->orderBy('data_agendamento', 'desc')  // Ordenar por data
                                        ->get();
   
           return view('historico.index', compact('agendamentos'));
       }
}
