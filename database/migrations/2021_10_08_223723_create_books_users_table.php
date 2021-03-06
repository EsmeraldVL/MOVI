<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_users', function (Blueprint $table) {
            $table->bigIncrements('idLibro'); //id del libro
            $table->string('userEmail',50);

            $table->string('author',100)->efault('text');
            $table->string('bookName',100)->default('text');
            $table->date('publicationDate');
            $table->string('synopsis',500)->default('text');
            $table->binary('image');
            $table->binary('PDF');
            $table->float('price');
            $table->foreign('userEmail')->references('email')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_users');
    }
}
