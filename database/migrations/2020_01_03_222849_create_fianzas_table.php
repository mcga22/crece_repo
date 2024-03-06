<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fianzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_fianza')->nullable();
            $table->tinyInteger('estado_fianza')->nullable();
            $table->string('tipo_fianza')->nullable();
            
             $table->unsignedBigInteger('detalle_fianza_fk')->nullable();
            
            $table->foreign('detalle_fianza_fk')
                   ->references('id')->on('detalle_fianzas')
                    ->onDelete('cascade');
            
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
        Schema::dropIfExists('fianzas');
    }
}
