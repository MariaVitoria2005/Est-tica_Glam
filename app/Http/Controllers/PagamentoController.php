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
        $pagamentos = Pagamento::all();

        // Retorna a view com os pagamentos
        return view('pagamentos.index', compact('pagamentos'));
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
        return view('pagamentos.show', compact('pagamentos'));
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
