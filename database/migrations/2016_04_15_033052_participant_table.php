<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('ID');
            $table->date('Date');
            $table->time('Time');
            $table->integer('HID')->unsigned();
            $table->foreign('HID')->references('ID')->on('history');
            $table->char('MID', 9);
            $table->foreign('MID')->references('Code')->on('member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participant');
    }
}
