<?php

namespace App\Models\Usuarios;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'm_usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nombre', 'email', 'password','autorizado','m_delegacion_id','m_empresa_id',
        'sg_sace','sg_terminales','sg_manuales','sg_caja','sg_taller','sg_alamcen','sg_seguros',
        'sg_calidad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function delegaciones() {
        return $this->hasOne('Delegacion', 'm_delegacion_id', 'id');
    }

    function empresas() {
        return $this->hasOne('Empresa','m_empresa_id', 'id');
    }
}
