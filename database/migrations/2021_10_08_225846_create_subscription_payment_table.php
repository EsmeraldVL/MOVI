<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_payment', function (Blueprint $table) {
            $table->bigIncrements('idPayment'); //idPago
            $table->string('email',50);
            $table->bigInteger('idSuscription');
            $table->date('paymentDate');
            $table->float('amount');
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('idSuscription')->references('id')->on('user_subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_payment');
    }
}
