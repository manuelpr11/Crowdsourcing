<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('QuestionId')->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('OptionID1')->references('id')->on('options')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('OptionID2')->references('id')->on('options')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('question_options');
    }
}
