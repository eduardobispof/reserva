<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = ['user_id', 'equipamento_id', 'data', 'hora_inicio', 'hora_fim'];
}
