<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ces', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->char('word');
            $table->text('description');
            $table->unsignedInteger('ra_id');
            $table->foreign('ra_id')->references('id')->on('ras');
            $table->unsignedInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->integer('mark');
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
        Schema::dropIfExists('ces');
    }
}
