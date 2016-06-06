<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    protected $table = 'm_delegaciones';
    protected $fillable = ['alias','descripcion'];

    public function usuarios()
    {
        return $this->hasMany('App\User');
    }

}
