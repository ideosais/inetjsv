<?php

namespace App\Helpers;

/**
 * Created by PhpStorm.
 * User: mariog
 *
 * Fichero Helper de funciones personalizadas
 *
*/
    /**
     * Añade un id en blanco y una descripción a un select.
     * Muy util para cargar maestros sobre select y activarles la verificación
     * @return contenido del select
     */
class IDEOSHelpers
{

    public static function cambia_fecha_a_mysql($valor){

        $dia = substr($valor,0,2);
        $mes = substr($valor,3,2);
        $ano = substr($valor,6,4);

        $result = $ano."-".$mes."-".$dia;

        return $result;
    }

    public static function cambia_fecha_de_mysql($valor){

        $ano = substr($valor,0,4);
        $mes = substr($valor,5,2);
        $dia = substr($valor,8,2);

        $result = $dia."-".$mes."-".$ano;

        return $result;
    }

    public static function es_autorizado($sg,$field,$id)
    {

        switch ($sg) {
            case '0':
                $texto = '<input class="switch" id="'.$field.':'.$id.'" type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success" >';
                break;
            case '1':
                $texto = '<input class="switch" id="'.$field.':'.$id.'" type="checkbox" checked data-toggle="toggle" data-size="mini" data-onstyle="success" >';
                break;
        }

        echo "$texto";
    }

    public static function nivel_autorizacion($sg,$field,$id)
    {

        switch ($sg) {
            case '0':
                $texto = '<div class="btn-group"><button id="'.$field.':'.$id.'" type="button" class="icp icp-dd btn btn-danger dropdown-toggle iconpicker-component btn-xs" data-selected="fa-minus" data-toggle="dropdown"><i class="fa fa-minus"></i><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu"></div></div>';
                break;
            case '1':
                $texto = '<div class="btn-group"><button id="'.$field.':'.$id.'" type="button" class="icp icp-dd btn btn-success dropdown-toggle iconpicker-component btn-xs" data-selected="fa-user" data-toggle="dropdown"><i class="fa fa-user"></i><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu"></div></div>';
                break;
            case '2':
                $texto = '<div class="btn-group"><button id="'.$field.':'.$id.'" type="button" class="icp icp-dd btn btn-warning dropdown-toggle iconpicker-component btn-xs" data-selected="fa-wrench" data-toggle="dropdown"><i class="fa fa-wrench"></i><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu"></div></div>';
                break;
            case '3':
                $texto = '<div class="btn-group"><button id="'.$field.':'.$id.'" type="button" class="icp icp-dd btn btn-primary dropdown-toggle iconpicker-component btn-xs" data-selected="fa-star" data-toggle="dropdown"><i class="fa fa-star"></i><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu"></div></div>';
                break;
        }

        echo "$texto";
    }
}
?>