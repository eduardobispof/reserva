<?php

use App\User;
use App\Tipo;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';

    protected $fillable = ['nome', 'tipo_id'];

    public function tipos(){
        return $this->hasMany(Tipo::class, 'id', 'tipo_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'reservas', 'equipamento_id', 'user_id');
    }
}
