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
            $table->Integer('categoria');
            $table->Integer('subcategoria');
            //duracion del servicio en segundos OwO
            $table->unsignedInteger('duraccion');
            $table->text('descripcion');
            $table->Integer('id_ciudad');
            $table->float('precio_decimal');
            $table->Integer('foto_principal');
            $table->string('id_contenidos_multimedia');
            $table->string('rango_fechas');
            $table->unsignedTinyInteger('public_state');
            $table->unsignedInteger('ndenuncias');
            $table->unsignedInteger('n_usos');
            $table->float('puntuacion');
            $table->string('id_comentarios_servicio');
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
        Schema::dropIfExists('servicios');
    }
}
