<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Servico;

class PagamentoController
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $pagamentos = Pagamento::all();
        $servicos = Servico::all();
        $clientes = Cliente::all();
        $agendamentos = Agendamento::all();
        $status = ['pago','pedente','cancelado'];


        // Captura o valor do status da requisição (caso exista)
        $status = $request->get('status');
        
        // Se o status for passado na URL, filtra os pagamentos por esse status
        if ($status) {
            $pagamentos = Pagamento::where('status', $status)->paginate(10);
        } else {
            // Caso contrário, traz todos os pagamentos sem filtro
            $pagamentos = Pagamento::paginate(10);
        }

        // Retorna a view com os pagamentos e o filtro aplicado
        return view('pagamentos.index', compact('pagamentos' , 'status' ,  'clientes', 'agendamentos', 'servicos'));


    }
    public function showForm()
    {
        // Recupera todos os serviços disponíveis para exibir no formulário
        $servicos = Servico::all();
        return view('pagamento.form', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'metodo_pagamento' => 'required|string',
        // ]);
    
        // $pagamento = new Pagamento();
        // $pagamento->metodo_pagamento = $request->metodo_pagamento;
        // 
        // $pagamento->save();
    
        // return redirect()->route('pagamentos_index')->with('success', 'Pagamento confirmado!');

         // Valida os dados do formulário
         $validated = $request->validate([
            'servico_id' => 'required|exists:servicos,id',
            'metodo_pagamento' => 'required',
            'nome' => 'required|string|max:255',
        ]);

        // Cria um novo pagamento
        $pagamento = new Pagamento();
        $pagamento->servico_id = $request->servico_id;
        $pagamento->metodo_pagamento = $request->metodo_pagamento;
        $pagamento->cliente_nome = $request->nome;
        $pagamento->status = 'pago';  // Pode ser 'pago', 'pendente', 'falhou', etc.
        $pagamento->save();

        // Redireciona o usuário com uma mensagem de sucesso
        return redirect()->route('pagamento.form')->with('success', 'Pagamento realizado com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        // Buscar o pagamento pelo ID
        $pagamento = Pagamento::findOrFail($id);
        
        // Passa o pagamento encontrado para a visão
        return view('pagamentos.show', compact('pagamento'));
        
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
