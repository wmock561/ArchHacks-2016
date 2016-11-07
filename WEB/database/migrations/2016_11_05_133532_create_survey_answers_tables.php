<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyAnswersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question1_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->string('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });

        Schema::create('question2_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->string('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });

        Schema::create('question3_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->string('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });

        Schema::create('question4_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->string('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });

        Schema::create('question5_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->integer('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });

        Schema::create('question6_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->integer('answer')->nullable();
            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question1_answers');
        Schema::dropIfExists('question2_answers');
        Schema::dropIfExists('question3_answers');
        Schema::dropIfExists('question4_answers');
        Schema::dropIfExists('question5_answers');
        Schema::dropIfExists('question6_answers');
    }
}
