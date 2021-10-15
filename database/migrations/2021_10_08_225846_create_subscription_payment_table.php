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
        Schema::create('subscriptionPayment', function (Blueprint $table) {
            $table->bigIncrements('idPayment'); //idPago
            $table->string('email',50)->default('text');
            $table->integer('idSuscription');

            $table->date('paymentDate');
            $table->float('amount');

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
