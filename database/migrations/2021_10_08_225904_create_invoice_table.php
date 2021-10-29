<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateF');
            $table->string('email',50);
            $table->integer('nit');
            $table->float('paymentType');//tipo de pago
            $table->timestamps();
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('paymentType')->references('id')->on('payment_type');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
