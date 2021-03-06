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
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('BookName');
            // $table->integer('CategoryId')->nullable(); 
            $table->foreignId('Category_id')->nullable()->constrained('categories');
            $table->foreignId('Author_id')->nullable()->constrained('authors');
            // $table->foreign('AuthorID')->reference('id')->on('authors')->onDelete('cascade');
            //$table->integer('AuthorId')->nullable();
            // $table->foreignId('CategoryId')->constrained('categories');
            // $table->foreignId('AuthorId')->constrained('authors');
            $table->string('ISBNumber')->nullable();
            $table->double('Price')->nullable();
            $table->string('BookImage')->nullable();
            $table->integer('IsIssued')->nullable();
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
