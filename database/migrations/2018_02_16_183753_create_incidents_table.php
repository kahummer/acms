<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('incidents', function (Blueprint $table)
         {         
         $table->increments('id');
         $table->timestamps();
         $table->string('incidentid');
         $table->string('aeroplane');
         $table->string('incidentname');
         $table->string('location');
         $table->string('image');
         $table->string('casualties');
         $table->string('damagelevel');
         $table->string('description');

         });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');

    }
}
