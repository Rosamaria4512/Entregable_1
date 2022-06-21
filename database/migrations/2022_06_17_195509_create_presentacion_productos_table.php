<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentacionProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentacion_producto', function (Blueprint $table) {
            $table->increments('id_presentacion_producto');
            $table->integer('id_unidad_medida')->unsigned();
            $table->foreign('id_unidad_medida')
                  ->references('id_unidad_medida')
                  ->on('unidad_medida')->onDelete('cascade')->onUpdate('cascade');
                  
            $table->string('descripcion_presentacion_producto',100)->nullable();
            $table->float('valor')->unsigned();
            $table->float('stock')->nullable()->unsigned();
            $table->enum("estado_presentacion",["activo","inactivo"])->nullable();
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
        Schema::dropIfExists('presentacion_producto');
    }
}
