<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('transMethod');
            $table->string('promo')->nullable();
            $table->date('date');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('ticketcat_id');
            $table->foreign('ticketcat_id')->nullable()->references('id')->on('ticketcategory')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}

