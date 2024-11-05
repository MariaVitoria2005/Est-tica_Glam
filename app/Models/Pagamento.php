<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    
    protected $fillable = ['metodo','valor','data_pagamento','agendamento_id'];
    
    public function agendamento()
    {
        return $this->hasMany (Agendamento::class);

    }
}
