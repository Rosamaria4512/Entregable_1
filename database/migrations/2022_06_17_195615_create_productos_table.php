<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');

            $table->integer('id_local_comercial')->unsigned();
            $table->foreign('id_local_comercial')
                ->references('id_local_comercials')
                ->on('local_comercials')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_presentacion_producto')->unsigned();
            $table->foreign('id_presentacion_producto')
                ->references('id_presentacion_producto')
                ->on('presentacion_producto')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')
                ->references('id_categoria')
                ->on('categoria')->onDelete('cascade')->onUpdate('cascade');

            $table->string('nombre_producto', 45);
            $table->longText('descripcion_producto')->nullable();
            $table->longText('historia_producto')->nullable();
            $table->string('imagen_producto', 60)->nullable();
            $table->date('fecha_produccion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->enum("estado_producto", ['activo', 'inactivo'])->default('activo');
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
        Schema::dropIfExists('productos');
    }
}
