<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('email_verified_at');
            $table->string('password');
            $table->string('type')->default('al');
            $table->unsignedInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->unsignedInteger('cycle_id');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
