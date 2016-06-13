<?php

namespace App\Models\Activos;

use Illuminate\Database\Eloquent\Model;

class Clase_activo extends Model
{
    protected $table = 'conta_m_clase_activos';
    protected $fillable = ['alias','descripcion'];

    public function activos()
    {
        return $this->hasMany('App\Models\Activos\Activo');
    }

    function grupo_activo() {
        return $this->belongsTo('Grupo_activo');
    }
}
