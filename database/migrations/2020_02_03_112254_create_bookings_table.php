<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tourist_id');
            $table->unsignedBigInteger('attraction_id');
            $table->unsignedBigInteger('guide_id')->nullable();
            $table->integer('duration');
            $table->integer('people');
            $table->double('amount');
            $table->date('start');
            $table->date('end');
            $table->enum('status',['Pending','Active', 'Finished']);
            $table->timestamps();

            $table->foreign('tourist_id')->references('id')->on('tourists');
            $table->foreign('attraction_id')->references('id')->on('attractions');
            $table->foreign('guide_id')->references('id')->on('tour_guides');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
