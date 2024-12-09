<?php

namespace App\Http\Controllers;

use App\Models\Cancelamento;
use App\Models\Agendamento;
use Illuminate\Http\Request;




class CancelamentoController extends Controller
{
     // Exibe a página de cancelamento para um agendamento específico
     public function showCancellationPage($agendamentoId)
     {
         $agendamento = Agendamento::findOrFail($agendamentoId);
         return view('cancelamento.show', compact('agendamento'));
     }
 
     // Processa o cancelamento do agendamento
     public function processCancellation(Request $request, $agendamentoId)
     {
         // Valida os dados enviados
         $validated = $request->validate([
             'percentagem' => 'required|numeric|min:0|max:100',
             'descricao' => 'required|string',
         ]);
 
         // Recupera o agendamento
         $agendamento = Agendamento::findOrFail($agendamentoId);
 
         // Calcula o valor da taxa de cancelamento
         $valorServico = $agendamento->valor; // Certifique-se de que o valor está no modelo de Agendamento
         $percentagemCancelamento = $validated['percentagem'];
         $taxaCancelamento = ($valorServico * $percentagemCancelamento) / 100;
 
         // Cria o registro de cancelamento
         $cancelamento = new Cancelamento();
         $cancelamento->percentagem = $percentagemCancelamento;
         $cancelamento->descricao = $validated['descricao'];
         $cancelamento->tipo_servico = $agendamento->tipo_servico;
         $cancelamento->agendamento_id = $agendamento->id;
         $cancelamento->save();
 
         // Atualiza o status do agendamento para "cancelado"
         $agendamento->status = 'cancelado';
         $agendamento->save();
 
         // Redireciona o usuário para uma página com uma mensagem de sucesso
         return redirect()->route('Home.index')->with('success', 'Serviço cancelado com sucesso. Taxa de cancelamento: R$ ' . number_format($taxaCancelamento, 2, ',', '.'));
     }
}
