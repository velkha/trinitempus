<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->Integer('uid_owner');
            $table->string('nombre');
            $table->Integer('categoria')->nullable();
            $table->Integer('subcategoria')->nullable();
            //duracion del servicio en segundos
            $table->unsignedInteger('duracion');
            $table->text('descripcion')->nullable();
            $table->Integer('id_ciudad');
            $table->float('precio_decimal');
            $table->Integer('foto_principal')->nullable();
            $table->string('id_contenidos_multimedia')->nullable();
            $table->string('rango_fechas');
            $table->unsignedTinyInteger('public_state');
            $table->unsignedInteger('ndenuncias')->nullable();
            $table->unsignedInteger('n_usos')->nullable();
            $table->float('puntuacion')->nullable();
            $table->string('id_comentarios_servicio')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
