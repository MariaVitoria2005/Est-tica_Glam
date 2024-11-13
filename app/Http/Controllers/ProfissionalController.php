<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Servico;

class ProfissionalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profissionais = Profissional::all();
        
        return view('Home.index',  ['profissionais' => $profissionais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agendamentos = Agendamento::all();
        $servicos = Servico::all();

        return view('Home.index',['agendamentos' => $agendamentos,'servicos' =>$servicos] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'nome' => 'required',
             'email' => 'required',
             'telefone' => 'required',
             'especialidade' => 'required',
             'disponibilidades' => 'required',
             'agendamento_id' => 'required',
             'servico_id' => 'required',
             'foto' => 'required',
           ]);
   
          Profissional::create($request->all());
          
          return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profissional $profissional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profissional $profissional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profissional $profissional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profissional $profissional)
    {
        //
    }
}
