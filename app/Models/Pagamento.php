<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    
    protected $fillable = ['metodo_pagamento','valor','data_pagamento','status','cliente_id','agendamento_id'];
    
    public function cliente()
    {
        return $this->belongsTo (Cliente::class);

    }

    public function agendamento()
    {
        return $this->belongsTo (Agendamento::class);

    }
}
