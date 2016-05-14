<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Poster');
            $table->text('Description');
            $table->string('Location');
            $table->integer('GE')->unsigned();
            $table->integer('HID')->unsigned();
            $table->foreign('HID')->references('ID')->on('history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail');
    }
}
