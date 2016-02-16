<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->integer('exam_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->timestamps()->useCurrent();

            $table->foreign('exam_id')
                ->references('id')->on('exams');
            $table->foreign('question_id')
                ->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exam_questions');
    }
}
