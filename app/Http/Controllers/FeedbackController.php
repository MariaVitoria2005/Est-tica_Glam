<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\cliente;
use App\Models\Profissional;
use App\Models\Servico;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $feedbacks = Feedback::all();
       
        // return view('Home.index',  compact('feedbacks'));
          // Carrega todos os feedbacks, incluindo o relacionamento com o cliente
          $feedbacks = Feedback::all();  // Aqui estamos carregando todos os feedbacks, incluindo created_at

          // Retorna a view com os dados dos feedbacks
          return view('feedbacks.index', compact('feedbacks'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $feedbacks = Feedback::all();
        
        // return view('Home.index')->with('feedbacks', $feedbacks);

        $agendamentos = Agendamento::all();
        $clientes = Cliente::all();
        $profissionais = Profissional::all();
        $servicos = Servico::all();

        return view('Home.index',['agendamentos' => $agendamentos, 'clientes' => $clientes, 'profissionais' => $profissionais, 'servicos' =>$servicos] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'nota' => 'required',
          'comentario' => 'required',
          'agendamento_id' => 'required',
          'data_feedback' => 'required',
          'cliente_id' => 'required',
          'profissional_id' => 'required',
          'servico_id' => 'required',
        ]);
    
        Feedback::create($request->all());
           
        return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
