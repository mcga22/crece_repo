<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_fianzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
             $table->string('nombre_apellido')->nullable();
            $table->string('rfc')->nullable();
            $table->string('calle')->nullable();
            $table->string('no_ext')->nullable();
            $table->string('colonia')->nullable();
            $table->string('delegacion')->nullable();
            $table->string('cp')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('entidad_federativa')->nullable();
            $table->string('telefono_particular')->nullable();
            $table->string('telefono_oficina')->nullable();
            $table->string('telefono_movil')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('puesto')->nullable();
            $table->string('lugar_nacimineto')->nullable();
            $table->date('fecha_nacimineto')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->string('sueldo')->nullable();
            $table->string('afianzado_ateriormente',10)->nullable();
            $table->string('nombre_patron')->nullable();
            $table->string('calle_patron')->nullable();
            $table->string('numero_patron')->nullable();
            $table->string('poblacion_patron')->nullable();
            $table->string('duracion_empleo_patron')->nullable();
            $table->string('ocupacion_patron')->nullable();
            
            
            
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
        Schema::dropIfExists('detalle_fianzas');
    }
}
