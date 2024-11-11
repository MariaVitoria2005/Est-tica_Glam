<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profissionais = Profissional::all();
        
        return view('Home.agendamento',  compact('profissional'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
