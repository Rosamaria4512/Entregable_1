<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_comercials', function (Blueprint $table) {
            $table->increments('id_local_comercials');
            $table->integer('id_tipo_identificacion_comercial')->unsigned();
            $table->foreign('id_tipo_identificacion_comercial')
                  ->references('id_tipo_identificacion_comercial')
                  ->on('tipo_identificacion_comercials')->onDelete('cascade')->onUpdate('cascade');

            $table->string('razon_social',120);
            $table->string('direccion_local_comercial',60);
            $table->string('telefono_fijo',20)->nullable();
            $table->string('telefono_movil',20)->nullable();
            $table->string('identificacion_local_comercial',45);
            $table->string('email_local_comercial',60)->nullable();
            $table->string('pass',45);
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
        Schema::dropIfExists('local_comercials');
    }
}
