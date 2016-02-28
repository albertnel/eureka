<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionMcqAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_mcq_answers', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('question_id')->unsigned();
            $table->json('question_data');
            $table->timestamps();

            /*$table->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question_mcq_answers');
    }
}
