<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use Illuminate\Support\Facades\DB;

class Servico_DetalhesController extends Controller
{
    
    public function detalhes($id)
    {
        // Recupera o serviço específico pelo ID
        $servico = Servico::findOrFail($id);

        // Recupera todos os outros serviços (ativos) para exibir como relacionados
        $servicosRelacionados = DB::table('servicos')->where('status', 'ativo')->where('id', '!=', $id)->get();

        // Retorna a view passando o serviço principal e os relacionados
        return view('detalhes_servico', compact('servico', 'servicosRelacionados'));
    }
}
