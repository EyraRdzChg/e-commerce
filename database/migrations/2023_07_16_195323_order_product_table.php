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
        Schema::create('order_product', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->unsigned(); # Permite saber cuántos Products pertenecen a una Order

            $table->foreign('order_id')->references('id')->on('orders'); # La FK 'order_id' hace referencia al id de orders
            $table->foreign('product_id')->references('id')->on('products'); # La FK 'product_id' hace referencia al id de products
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};
