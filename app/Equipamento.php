<?php

namespace App;
use App\Tipo;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';

    protected $fillable = ['nome'];

    public function tipos(){
        return $this->hasMany(Tipo::class);
    }
}
