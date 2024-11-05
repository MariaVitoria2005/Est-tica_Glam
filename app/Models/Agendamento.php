<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['data','hora','cliente_id','servico_id','profissional_id'];
    
    public function cliente()
    {
        return $this->belongsTo (Cliente::class);
    }

    public function servico()
    {
       return $this->belongsTo (Servico::class);
    }
    
    public function profissional()
    {
       return $this->belongsTo (Profissional::class);
    }
}
