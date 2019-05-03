<?php

use App\User;
use App\Tipo;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';

    protected $fillable = ['nome'];

    public function tipos(){
        return $this->hasMany(Tipo::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'reservas');
    }
}
