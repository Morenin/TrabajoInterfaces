<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_cs', function (Blueprint $table) {
            $table->engine = "InnoDB";  
            $table->increments('id');   
            $table->string('name');
            $table->string('firstname');
            $table->string('email');
            $table->string('phone');
            $table->unsignedInteger('cycle_id');
            $table->foreign('cycle_id')->references('id')->on('cycles');    
            $table->boolean('deleted');
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
        Schema::dropIfExists('tutor_cs');
    }
}
