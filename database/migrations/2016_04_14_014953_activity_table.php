<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->increments('ID'); // รหัสกิจกรรม
            $table->string('Name'); // ชื่อกิจกรรม
            $table->boolean('Hide'); // ซ่อนกิจกรรมจากสมาชิก (เห็นได้เฉพาะ Admin)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity');
    }
}
