<?php

namespace App\Http\Controllers;

use App\Models\Cancelamento;
use App\Models\Agendamento;
use Illuminate\Http\Request;


class CancelamentoController extends Controller
{
    // Método para exibir a página de cancelamento
    public function showCancellationPage($agendamentoId)
    {
        // Buscar o agendamento pelo ID
        $agendamento = Agendamento::findOrFail($agendamentoId);

        // Retornar a página com o agendamento
        return view('cancelamento.show', compact('agendamento'));
    }

    // Método para processar o cancelamento
    public function processCancellation(Request $request, $agendamentoId)
    {
        $request->validate([
            'percentagem' => 'required|numeric|min:0|max:100',
            'descricao' => 'required|string',
            'confirm' => 'required|boolean',
        ]);

        // Buscar o agendamento para garantir que ele existe
        $agendamento = Agendamento::findOrFail($agendamentoId);

        // Criar o registro de cancelamento
        $cancelamento = new Cancelamento();
        $cancelamento->percentagem = $request->input('percentagem');
        $cancelamento->descricao = $request->input('descricao');
        $cancelamento->agendamento_id = $agendamento->id;
        $cancelamento->tipo_servico = $agendamento->tipo_servico;

        // Salvar o cancelamento no banco
        $cancelamento->save();

        // Opcional: Adicionar lógica para alterar o status do agendamento, se necessário
        $agendamento->status = 'cancelado';
        $agendamento->save();

        // Retornar resposta
        return redirect()->route('home.index')->with('success', 'Serviço cancelado com sucesso!');
    }
}
