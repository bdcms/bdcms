<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_type_id');
            $table->integer('car_id');
            $table->integer('driver_id');
            $table->integer('owner_id');
            $table->integer('complainant_id');
            $table->string('complainant_date');
            $table->integer('withdraw_id');
            $table->string('withdraw_date');
            $table->string('case_area');
            $table->integer('case_status')->default(1);
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
        Schema::dropIfExists('cases');
    }
}
