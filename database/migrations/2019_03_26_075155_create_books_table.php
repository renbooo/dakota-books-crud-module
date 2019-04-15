<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('books_id');
            $table->string('books_title');
            $table->text('books_description');
            $table->string('books_language');            
            $table->string('books_publisher');
            $table->string('books_country');
            $table->string('books_writer');
            $table->integer('books_qty');
            $table->string('books_filename')
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
        Schema::dropIfExists('books');
    }
}