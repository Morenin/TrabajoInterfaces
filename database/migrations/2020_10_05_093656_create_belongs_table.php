<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belongs', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
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
        Schema::dropIfExists('belongs');
    }
}
