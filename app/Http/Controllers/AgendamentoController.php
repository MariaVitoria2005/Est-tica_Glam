<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Servico;
use App\Models\Cliente;
use App\Models\Profissional;
use App\Models\status;
use Illuminate\Http\Request;
use App\Models\Feedback;

class AgendamentoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendamentos = Agendamento::all();
        $feedbacks = Feedback::all();
        
        return view('Home.index', ['agendamento' => $agendamentos, 'feedbacks'=>$feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicos = Servico::all();
        $clientes = Cliente::all();
        $profissionais = Profissional::all();
        $status = ['Cancelado','Confirmado','Concluído'];

        return view('Home.agendamento',['servicos' => $servicos, 'clientes' => $clientes, 'profissionais' => $profissionais, 'status' =>$status] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
         'data' => 'required',
          'hora' => 'required',
          'cliente_id' => 'required',
          'servico_id' => 'required',
          'profissional_id' => 'required',
          'status' => 'required',
        ]);

       Agendamento::create($request->all());
       
       return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agendamento $agendamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }
}
