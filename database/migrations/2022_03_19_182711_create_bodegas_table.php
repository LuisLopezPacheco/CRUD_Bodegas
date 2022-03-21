<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",40);
            $table->enum('pais',['Mexico','Estados Unidos']);
            $table->string('estado', 35 );
            $table->string('municipio', 35 );
            $table->string('colonia', 35 );
            $table->string('calle', 35 );
            $table->string('num_establecimiento', 30 );
            $table->longText('descripcion');
            $table->timestamps();
            /*
            pais
            Estado
            Municipio
            colonia
            Calle
            No-Establecimiento 
            CodigoPostal
            Descripción
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodegas');
    }
};
