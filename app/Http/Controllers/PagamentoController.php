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
    
    public function index(Request $request)
    {
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
        return view('pagamentos.index', compact('pagamentos', 'status'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $clientes = Cliente::all();
        $agendamentos = Agendamento::all();
        $status = ['pago','pedente','cancelado'];

        return view('pagamentos.index',['status' =>$status, 'clientes'=>$clientes, 'agendamentos'=>$agendamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
