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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('correo', 50);
            $table->string('dependencia', 50);
            $table->string('area', 50);
            $table->string('domicilio', 50);
            $table->string('telefono', 10);
            $table->string('fecha',10);
            $table->string('marca', 50);
            $table->string('serie', 50);
            $table->string('factura',50);
            $table->string('falla', 500);
            $table->string('componentes', 500);
            $table->string('acciones', 500);
            $table->string('resultado',500);
            $table->blob('evidencias');
            $table->string('status');

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
};
