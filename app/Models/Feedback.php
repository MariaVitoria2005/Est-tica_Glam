<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $fillable = ['nota','comentario','data_feedback','profissional_id','servico_id'];
    
    public function profissional()
    {
        return $this->belongsTo (Profissional::class);

    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);

    }
}
