<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('email')->unique();

            $table->string('password');
            $table->string('name',100)->default('text');
            $table->string('surname',100)->default('text');
            $table->date('birthday');
            $table->boolean('isAdmin');
            $table->boolean('isActive');
            $table->binary('profileImage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
