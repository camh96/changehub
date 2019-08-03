<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            // $table->string('organisation');
            $table->string('metronumber')->nullable();
            $table->string('flybuys')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('tools');
            $table->string('password', 60);
            $table->enum('access', array('user', 'admin'));
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
