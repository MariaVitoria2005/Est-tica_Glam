<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'Agendamentos';

    protected $fillable = ['status'];

    const STATUS_confirmado = 'confirmado';
    const STATUS_cancelado= 'cancelado';
    const STATUS_concluido = 'concluido';

    public function profissional()
    {
        return $this->belongsTo (profissional::class);

    }

    public function status()
    {
        return $this->status === self::STATUS_confirmado;
    }
}
