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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('correo',50);
            $table->string('dependencia',50);
            $table->string('area',50);
            $table->string('domicilio',50);
            $table->string('telefono',10);
            $table->string('fecha_registro',50);
            $table->string('marca',50);
            $table->string('serie',50);
            $table->string('factura',50);
            $table->string('falla',500);
            $table->string('fecha_recibido',50);
            $table->string('fecha_tramite',50);
            $table->string('proveedor',50); 
            $table->string('ticket_garantia',50);
           
            $table->string('fecha_envio_proveedor',50);
            $table->string('fecha_recepcion_garantia',50);
            $table->string('fecha_envio_cliente',50);
            $table->string('no_guia_cliente',50);
            $table->string('fecha_recibido_cliente',50);
            $table->string('fecha_pruebas',50);
            $table->string('confirmacion',50);
            $table->string('status',500);
            $table->string('user_alter',100);          
          
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
        Schema::dropIfExists('clientes');
    }
};
