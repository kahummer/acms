<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeroplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('aeroplanes', function (Blueprint $table)
         {         
         $table->increments('id');
         $table->timestamps();
         $table->string('aircraft_id');
         $table->string('manufacturers_name');
         $table->string('manufacture_date');
         $table->integer('Flight_hours');
         $table->string('Address');
         });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aeroplanes');

    }
}
