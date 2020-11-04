<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->unsignedInteger('tracing_id');
            $table->foreign('tracing_id')->references('id')->on('tracings');
            $table->unsignedInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->date('date');
            $table->float('kms');
            $table->boolean('accepted')->default(false);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('visits');
    }
}
