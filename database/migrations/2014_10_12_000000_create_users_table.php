<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('razon_social')->nullable();
            $table->string('persona_fisica')->nullable();
            $table->string('rfc')->nullable();
            $table->string('calle')->nullable();
            $table->string('no_ext')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->string('entidad_federativa')->nullable();
            $table->string('telefono')->nullable();
            
            $table->string('ruta_foto_carta_1')->nullable();
            $table->string('ruta_foto_carta_2')->nullable();
            $table->string('ruta_foto_cambio')->nullable();
            
            $table->string('nombre_sin_caracteres')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
            
            //LLave foranea
            $table->unsignedBigInteger('rol_fk')->nullable();
            
            // Relaciones
            $table->foreign('rol_fk')
                   ->references('id')->on('rols')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
