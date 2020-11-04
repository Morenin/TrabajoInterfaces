<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracings', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('type');
            $table->string('reason');
            $table->string('observation');
            $table->unsignedInteger('tutor_c_id');
            $table->foreign('tutor_c_id')->references('id')->on('users');
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
        Schema::dropIfExists('tutor_cs');
    }
}
