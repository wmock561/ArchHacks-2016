<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalInformation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('occupation')->nullable();
            $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PersonalInformation');
    }
}
