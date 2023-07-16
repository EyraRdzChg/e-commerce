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
        Schema::create('order_payout', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('payout_id')->unsigned();

            $table->foreign('order_id')->references('id')->on('orders'); # La FK 'order_id' hace referencia al id de orders
            $table->foreign('payout_id')->references('id')->on('payouts'); # La FK 'payout_id' hace referencia al id de payouts
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_payout');
    }
};
