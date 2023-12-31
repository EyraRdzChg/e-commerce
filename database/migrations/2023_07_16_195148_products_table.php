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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description', 1000);
            $table->float('price')->unsigned(); # El precio no debe tener signo
            $table->integer('stock')->unsigned(); # La existencia no debe tener signo
            $table->string('status')->default('unavailable'); # Por defecto, al inicio un producto está 'No disponible'
            $table->timestamp('published_at')->nullable();
            $table->float('handling_percentage')->unsigned()->nullable();
            $table->string('reason', 500)->nullable();

            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            // $table->morphs('productable');

            $table->softDeletes();
            $table->timestamps(); # Crea dos atributos (con fecha y hora) sobre el momento de creación y de actualización

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
