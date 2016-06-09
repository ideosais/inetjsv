<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resp_mtmo extends Model
{
    protected $table = 'conta_m_resp_mtmo';
    protected $fillable = ['alias','descripcion'];

    public function activos()
    {
        return $this->hasMany('App\Activo');
    }

}
