<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_book_details', function (Blueprint $table) {
            $table->id();
            $table->integer('BookId');
            $table->string('StudentId');
            $table->timestamp('IssuesDate')->nullable();
            $table->timestamp('ReturnDate')->nullable();
            $table->integer('ReturnStatus')->nullable();
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
        Schema::dropIfExists('issued_book_details');
    }
}
