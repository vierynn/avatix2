<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketcategory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price');
            $table->string('category');
            $table->date('date');
            $table->unsignedInteger('concert_id');
            $table->foreign('concert_id')->nullable()->references('id')->on('concerts')->onDelete('cascade');
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
        Schema::dropIfExists('ticketcategory');
    }
}
