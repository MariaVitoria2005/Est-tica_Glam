<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $fillable = ['nota','comentario','agendamento_id'];
    
    public function agendamento()
    {
        return $this->hasMany (Agendamento::class);

    }
}
