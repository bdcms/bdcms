<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carname_id');
            $table->integer('car_wheel');
            $table->string('car_chasis');
            $table->string('car_metro');
            $table->string('car_reg_num');
            $table->string('car_reg_date');
            $table->string('car_insurence');
            $table->string('car_road_permit_no');
            $table->string('car_engine_num');
            $table->string('car_pic');
            $table->integer('driver_id');
            $table->integer('owner_id');
            $table->string('car_document_pdf');
            $table->string('car_color');
            $table->integer('car_status')->default(0);
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
        Schema::dropIfExists('cars');
    }
}
