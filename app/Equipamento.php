<?php

use App\User;
// use App\Tipo;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';

    protected $fillable = ['nome', 'tipo_id'];

    public function tipo(){
        return $this->belongsTo('App\Tipo');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'reservas');
    }
}
