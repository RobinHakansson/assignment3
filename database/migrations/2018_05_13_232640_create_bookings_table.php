<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('guest_id')->nullable();
            $table->unsignedInteger('room_id')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->double('price', 8, 2);
            $table->timestamps();
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->foreign('guest_id')
            ->references('id')
            ->on('guests')
            ->onDelete('cascade');

            $table->foreign('room_id')
            ->references('id')
            ->on('rooms')
            ->onDelete('cascade');
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
