<?php

namespace App\Http\Controllers;

use App\Models\Servico;

use App\Models\Pagamento;
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

    // Método para realizar a pesquisa de serviços
    public function search(Request $request)
    {
        // Obtemos o termo de pesquisa do usuário
        $query = $request->input('query');
        
        // Filtramos os serviços com base no termo da pesquisa
        $servicos = Servico::where('tipo_servico', 'LIKE', "%{$query}%")
                            ->orWhere('descricao', 'LIKE', "%{$query}%")
                            ->get();

        // Retorna os serviços encontrados como uma resposta JSON
        return response()->json($servicos);
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
        $servico = Servico::findOrFail($id);
        
        return view('servicos.show', compact('servico'));
    }

    // Método para cancelar um serviço
    public function cancelar(Request $request)
    {
        // Busca o serviço pelo ID
        $servico = Servico::find($request->id);
        
        // Verifica se o serviço existe
        if (!$servico) {
            return response()->json(['success' => false, 'message' => 'Serviço não encontrado.']);
        }

        // Defina a taxa de cancelamento (exemplo: R$ 50,00)
        $taxaCancelamento = 50.00;
        
        // Cria um registro de pagamento com a taxa de cancelamento
        $pagamento = new Pagamento();
        $pagamento->servico_id = $servico->id;
        $pagamento->valor = $taxaCancelamento;
        $pagamento->status = 'cancelado';  // Status de cancelamento
        $pagamento->save();

        // Marca o serviço como cancelado
        $servico->status = 'cancelado';
        $servico->save();

        // Retorna resposta em JSON
        return response()->json(['success' => true, 'message' => 'Serviço cancelado com sucesso. A taxa de cancelamento foi cobrada.']);
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
