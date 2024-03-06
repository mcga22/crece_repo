 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioFianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_fianzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Llaves foraneas
            $table->unsignedBigInteger('usuario_fk');
            $table->unsignedBigInteger('fianza_fk');
            
            $table->string('ruta_foto_solicitud_1')->nullable();
            $table->string('ruta_foto_solicitud_2')->nullable();
            $table->string('ruta_ine')->nullable();
            $table->string('ruta_cfdi')->nullable();
            $table->string('ruta_xml')->nullable();
            $table->string('ruta_poliza')->nullable();
            $table->string('ruta_oficio')->nullable();
            $table->string('ruta_domicilio')->nullable();
            
            $table->timestamps();
            
             $table->foreign('usuario_fk')
                   ->references('id')->on('users')
                    ->onDelete('cascade');
             
              $table->foreign('fianza_fk')
                   ->references('id')->on('fianzas')
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
        Schema::dropIfExists('usuario_fianzas');
    }
}
