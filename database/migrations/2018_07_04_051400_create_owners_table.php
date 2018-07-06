<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('own_name');
            $table->string('own_father_name');
            $table->integer('own_nid');
            $table->integer('car_id');
            $table->string('own_birth_date');
            $table->string('own_profile_pic');
            $table->string('own_password');
            $table->string('own_email');
            $table->string('own_mobile');
            $table->string('own_gender');
            $table->string('own_passport')->nullable();
            $table->string('own_lincence')->nullable();
            $table->string('own_address');
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
        Schema::dropIfExists('owners');
    }
}
