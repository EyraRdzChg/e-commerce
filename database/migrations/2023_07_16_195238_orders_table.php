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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('status')->default('unpaid'); # Por defecto, una orden estará marcada como 'No pagada'
            $table->string('payment_type');
            $table->string('payment_proof')->nullable();
            $table->integer('rating')->unsigned()->nullable(); # La calificación no debe tener signo
            $table->timestamp('placed_at')->default(now()); # Fecha en la que se realizó la orden
            $table->float('amount')->unsigned(); # El importe no debe tener signo
            $table->bigInteger('user_id')->unsigned();

            $table->timestamps(); # Crea dos atributos (con fecha y hora) sobre el momento de creación y de actualización

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
        Schema::dropIfExists('orders');
    }
};
