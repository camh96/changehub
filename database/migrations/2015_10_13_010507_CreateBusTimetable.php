<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTimetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name'); // i.e work, home, church
            $table->string('days'); // i.e what days
            $table->string('origin'); // 78 Pirie St
            $table->string('destination'); // 20 Kent Tce
            $table->string('arrtime'); // arrival time at destination - need to be there by 9
            $table->string('deptime')->nullable();  // departure time to go home - finish work at 5 -- nullable - no need for return trip

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buses');
    }
}
