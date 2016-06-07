<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_usuarios', function (Blueprint $table) {

            $table->foreign('m_delegacion_id')->references('id')->on('m_delegaciones');
            $table->foreign('m_empresa_id')->references('id')->on('m_empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_usuarios', function (Blueprint $table) {

            $table->dropForeign('conta_activos_m_delegacion_id_foreign');
            $table->dropForeign('conta_activos_m_empresa_id_foreign');
        });
    }
}
