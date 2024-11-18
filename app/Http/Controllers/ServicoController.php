<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();

        return view('servicos.index', compact('servicos'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicos = Servico::all();
        
        return view('Home.agendamento',compact('servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_servico' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'agendamento_id' => 'required',
            'foto' => 'required',
           ]);
    
           Servico::create($request->all());
    
           return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $servico = Servico::findOrFail($id);  // Encontra o serviço pelo ID
        return view('servicos.show', compact('servico'));

        
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        //
    }
}
