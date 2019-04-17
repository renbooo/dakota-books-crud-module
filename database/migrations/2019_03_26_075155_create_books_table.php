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
            $table->string('books_writer');
            $table->text('books_description');
            $table->string('books_genre');
            $table->string('books_language');
            $table->string('books_country');            
            $table->string('books_publisher');
            $table->string('books_price');
            $table->integer('books_qty');
            $table->text('books_filepath');
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
