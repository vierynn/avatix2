<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('artist')->nullable();
            $table->string('type');
            $table->string('status');
            $table->string('day');
            $table->integer('date');
            $table->string('month');
            $table->string('start_time');
            $table->string('duration');
            $table->integer('year');
            $table->string('city');
            $table->string('place');
            $table->text('description');
            $table->string('image_path');
            $table->string('seatplan_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerts');
    }
}
