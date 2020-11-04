<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ras', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->integer('number');
            $table->text('description');
            $table->unsignedInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');
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
        Schema::dropIfExists('ras');
    }
}
