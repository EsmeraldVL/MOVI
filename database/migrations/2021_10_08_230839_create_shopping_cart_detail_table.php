<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartDetailTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idCart');
            $table->boolean('isBook');
            $table->bigInteger('idProduct');
            $table->integer('quantity');
            $table->text('detail');
            $table->float('unitPrice');
            //$table->foreign('idCart')->references('id')->on('shopping_cart');
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
        Schema::dropIfExists('shopping_cart_detail');
    }
}
