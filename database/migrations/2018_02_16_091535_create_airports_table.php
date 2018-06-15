<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::create('airports', function (Blueprint $table)
         {         
         $table->increments('id');
         $table->timestamps();
         $table->string('name');
         $table->string('country');
         $table->string('county');
         $table->integer('level');
         $table->string('type');
         });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');

    }
}
