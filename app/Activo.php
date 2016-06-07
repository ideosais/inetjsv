<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'conta_activos';

    protected $fillable = ['codigo', 'nombre', 'descripcion', 'imagen','ccontable', 'valor_compra',
        'fecha_compra', 'valor_venta', 'fecha_venta', 'alive', 'fecha_baja', 'm_delegacion_id','m_empresa_id',
        'ubicacion','plan_mtmo','m_resp_mtmo_id','fecha_utl_revision','historial',];

    function delegaciones() {
        return $this->hasOne('Delegacion', 'm_delegacion_id', 'id');
    }

    function empresas() {
        return $this->hasOne('Empresa','m_empresa_id', 'id');
    }

    function resp_mtmo() {
        return $this->hasOne('Resp_mtmo','m_resp_mtmo_id', 'id');
    }
}
