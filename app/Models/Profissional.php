<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissionais';

    protected $fillable = ['nome','email','telefone','especialidade','disponibilidades','agendamento_id','servico_id'];

    public function agendamento()
    {
        return $this->belongsTo (Agendamento::class);

    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);

    }
}
