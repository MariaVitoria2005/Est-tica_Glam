<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['nome','descricao','preco','agendamento_id'];

    public function agendamento()
    {
        return $this->belongsTo (Agendamento::class);

    }
}