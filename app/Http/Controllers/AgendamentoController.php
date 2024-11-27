<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Servico;
use App\Models\Cliente;
use App\Models\Profissional;
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
        $servicos = Servico::all();
        $profissionais = Profissional::all();
        
        return view('Home.index', ['agendamento' => $agendamentos, 'feedbacks'=>$feedbacks,'servicos' => $servicos, 'profissionais' => $profissionais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $servicos = Servico::all();
        $servico_id = $request->id;
        $clientes = Cliente::all();
        $profissionais = Profissional::all();
        $status = ['Cancelado','Confirmado','Concluído'];

        return view('Home.agendamento',['servicos' => $servicos, 'clientes' => $clientes, 'profissionais' => $profissionais, 'status' =>$status, 'servico_id' => $servico_id ]);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $request->validate([
    //       'data' => 'required',
    //       'hora' => 'required',
    //       'cliente_id' => 'required',
    //       'servico_id' => 'required',
    //       'profissional_id' => 'required',
    //       'status' => 'required',
    //     ]);

       Agendamento::create($request->all());
       
       return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $id)
    {
        $agendamentos = Agendamento::findOrFail($id);  // Encontra o serviço pelo ID
        return view('agendamentoss.show', compact('agendamentos'));
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
