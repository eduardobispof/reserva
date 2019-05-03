<?php

namespace App;
// use App\Equipamento;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';

    protected $fillable = ['nome', 'id'];

    public function equipamentos(){
        return $this->hasMany('App\Equipamento');
    }
}
