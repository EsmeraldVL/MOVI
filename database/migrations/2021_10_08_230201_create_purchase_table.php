<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigInteger('idFactura');
            $table->bigInteger('idProduct');
            $table->string('detail');
            $table->boolean('isBook');
            $table->integer('quantity');
            $table->float('subtotal');
            $table->bigInteger('idOffer');
            $table->float('total');
            $table->foreign('idFactura')->references('id')->on('facturas');
            //idLibro historia
            $table->foreign('idOffer')->references('id')->on('discount');
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
        Schema::dropIfExists('purchase');
    }
}
