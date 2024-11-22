<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico_Detalhes extends Model
{   
    use HasFactory;

    protected $table = 'servico_detalhes';

    protected $fillable = ['nome','descricao','valor','servico_id','foto','status'];

    public function servico()
    {
        return $this->belongsTo (Servico::class);

    }
}
