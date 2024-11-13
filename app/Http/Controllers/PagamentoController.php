<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Cliente;

class PagamentoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $agendamentos = Agendamento::all();
       $clientes = Cliente::all();
        
        return view('Home.index', ['agendamento' => $agendamentos, 'clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $agendamentos = Agendamento::all();

        return view('Home.agendamento',[ 'clientes' => $clientes, 'agendamentos' => $agendamentos] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Valide os dados do formulário
                $validated = $request->validate([
                    'valor' => 'required|numeric',
                    'metodo_pagamento' => 'required|in:cartao_credito,pix',
                ]);
        
                // Recupere o agendamento relacionado ao pagamento (use o ID do agendamento, por exemplo)
                // Supondo que o valor do agendamento seja único, como um ID no formulário
                $agendamento = Agendamento::findOrFail($request->input('agendamento_id')); // ajuste o campo conforme necessário
        
                // Verifique se o valor do pagamento é o valor correto do agendamento
                if ($agendamento->servico->preco != $validated['valor']) {
                    return redirect()->back()->withErrors('O valor do pagamento não corresponde ao valor do serviço.');
                }
        
                // Aqui você pode processar o pagamento (por exemplo, via uma API de pagamento)
                // Agora vamos simular que o pagamento foi realizado com sucesso
        
                // Atualize o status do agendamento, caso necessário
                $agendamento->status_pagamento = 'Pago'; // Ou o que for apropriado
                $agendamento->save();
        
                // Redirecione para a página de sucesso ou confirmação
                return redirect()->route('pagamento.confirmacao'); // Crie uma página de confirmação
    }

    /**
     * Display the specified resource.
     */
    public function show(Pagamento $pagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagamento $pagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pagamento $pagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pagamento $pagamento)
    {
        //
    }
}
