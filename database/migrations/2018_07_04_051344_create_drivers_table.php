<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dri_name');
            $table->string('dri_father_name');
            $table->integer('dri_nid');
            $table->integer('car_id');
            $table->string('dri_birth_date');
            $table->string('dri_profile_pic');
            $table->string('dri_password');
            $table->string('dri_email');
            $table->string('dri_mobile');
            $table->string('dri_gender');
            $table->string('dri_passport')->nullable();
            $table->string('dri_lincence');
            $table->string('dri_address');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('drivers');
    }
}
