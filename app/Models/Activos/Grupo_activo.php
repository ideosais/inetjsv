<?php

namespace App\Models\Activos;

use Illuminate\Database\Eloquent\Model;

class Grupo_activo extends Model
{
    protected $table = 'conta_m_grupo_activos';
    protected $fillable = ['alias','descripcion'];

    public function activos()
    {
        return $this->hasMany('App\Models\Activos\Activo');
    }

    public function clase_activo()
    {
        return $this->hasMany('App\Models\Activos\Clase_activo');
    }
}
