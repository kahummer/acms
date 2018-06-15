<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('repairs', function (Blueprint $table)
         {         
         $table->increments('id');
         $table->timestamps();
         $table->string('repaireid');
         $table->string('aeroplane');
         $table->string('type');
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
        Schema::dropIfExists('repairs');

    }
}
