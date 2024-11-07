<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancelamento extends Model
{
    use HasFactory;

    protected $fillable = ['percentagem','descricao','tipo_servico','agendamento_id'];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);

    }
}
