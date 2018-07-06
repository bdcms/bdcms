<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('off_district');
            $table->string('off_upazilla');
            $table->string('off_address');
            $table->string('off_email');
            $table->string('off_mobile');
            $table->string('off_web')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_addresses');
    }
}
