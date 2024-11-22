<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Servico_Detalhes;
use Illuminate\Support\Facades\DB;

class Servico_DetalhesController extends Controller
{
    
    public function detalhes($id)
    {
        // Recupera o serviço específico pelo ID
        $servico = Servico::findOrFail($id);

        // Recupera todos os outros serviços (ativos) para exibir como relacionados
        $servicosRelacionados = Servico_Detalhes::with('servico')
        ->where('status', 'ativo')
        ->where('servico_id', $id)
        ->get();

        // Retorna a view passando o serviço principal e os relacionados
        return view('Detalhes01.detalhes_servico', compact('servico', 'servicosRelacionados'));
    }
}
