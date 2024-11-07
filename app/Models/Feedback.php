<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $fillable = ['nota','comentario','agendamento_id','data_feedback','cliente_id','profissional_id','servico_id'];
    
    public function agendamento()
    {
        return $this->belongsTo (Agendamento::class);

    }

    public function cliente()
    {
        return $this->belongsTo (Cliente::class);

    }
    
    public function profissional()
    {
        return $this->belongsTo (Profissional::class);

    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);

    }
}
