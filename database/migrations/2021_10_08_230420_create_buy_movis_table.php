<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyMovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_movis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount');
            $table->string('email');
            $table->bigInteger('idPaymentType');
            $table->string('detail');
            $table->string('currency');
            $table->foreign('idPaymentType')->references('id')->on('payment_type');
            $table->foreign('email')->references('email')->on('users');
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
        Schema::dropIfExists('buy_movis');
    }
}
