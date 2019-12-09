<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_id');
            $table->string('arrival_date');
            $table->string('departure_date')->nullable();
            $table->decimal('amount')->nullable();
            $table->decimal('paid_amount')->nullable();
            $table->decimal('due_amount')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->integer('number_of_room');
            $table->integer('number_of_people');
            $table->string('reference')->nullable();

            $table->unsignedBigInteger('reserved_by');

            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('reserved_by')->references('id')->on('users');
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
        Schema::dropIfExists('reservations');
    }
}
