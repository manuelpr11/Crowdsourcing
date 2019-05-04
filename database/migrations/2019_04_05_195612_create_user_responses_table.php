<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserID')->unsigned();;
            $table->string('RightAnswer');
            $table->string('WrongAnswer');
            $table->string('GivenAnswer');
            $table->integer('QuestionID')->unsigned();;
            $table->timestamps();
            
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('QuestionID')->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_responses');
    }
}
