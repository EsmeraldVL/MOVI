<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//biginteger
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('idBook');
            $table->string('bookName',100)->default('text');
            $table->string('author',100)->efault('text');
            $table->string('publication_Date',100)->default('text');
            $table->string('user_email',50)->default('text');
            $table->string('synopsis',100)->default('text');
            $table->binary('image');
            $table->binary('PDF');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
