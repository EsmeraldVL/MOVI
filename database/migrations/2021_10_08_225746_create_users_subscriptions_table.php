<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idSubscription');
            $table->string('userEmail',50);
            $table->timestamps();
            $table->foreign('userEmail')->references('email')->on('users');
            $table->foreign('idSubscription')->references('id')->on('subscriptions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_subscriptions');
    }
}
