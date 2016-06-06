<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',120);
            $table->string('email',120)->unique();
            $table->string('password',120);
            $table->boolean('sadmin');
            $table->boolean('autorizado');
            $table->integer('m_delegacion_id')->unsigned();
            $table->integer('m_empresa_id')->unsigned();
            $table->tinyInteger('sg_sace');
            $table->tinyInteger('sg_terminales');
            $table->tinyInteger('sg_manuales');
            $table->tinyInteger('sg_caja');
            $table->tinyInteger('sg_taller');
            $table->tinyInteger('sg_almacen');
            $table->tinyInteger('sg_seguros');
            $table->tinyInteger('sg_calidad');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_usuarios');
    }
}
