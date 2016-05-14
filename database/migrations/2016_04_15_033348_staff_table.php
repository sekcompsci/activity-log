<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Position');
            $table->integer('DID')->unsigned();
            $table->foreign('DID')->references('ID')->on('detail');
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
        Schema::drop('staff');
    }
}
