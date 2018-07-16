<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('user_name');
            $table->string('user_fname');
            $table->string('user_profile_pic');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_mobile');
            $table->string('car_id');
            $table->string('user_address');
            $table->string('user_birthday');
            $table->string('user_gender');
            $table->string('driver_id')->nullable();
            $table->string('user_passport')->nullable();
            $table->string('user_lisence')->nullable();
            $table->string('user_nid')->nullable();
            $table->string('user_posting')->nullable();
            $table->string('user_identidy')->nullable();
            $table->string('user_joining_date')->nullable(); 
            $table->integer('role_id');
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
        Schema::dropIfExists('users');
    }
}
