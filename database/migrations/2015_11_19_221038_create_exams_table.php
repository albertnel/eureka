<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time');
            $table->unsignedInteger('time_limit');
            $table->boolean('is_survey');
            $table->string('password', 60);
            $table->text('info');
            $table->unsignedTinyInteger('default_allowed_attempts');
            $table->boolean('feedback');
            $table->unsignedInteger('feedback_time_limit');
            $table->boolean('feedback_comments');
            $table->boolean('randomize_question');
            $table->boolean('force_complete');
            $table->boolean('allow_navigation');
            $table->boolean('allow_answer_editing');
            $table->boolean('allow_logout');
            $table->boolean('display_results');
            $table->boolean('display_student_name');
            $table->boolean('display_exam_name');
            $table->boolean('display_exam_date');
            $table->boolean('display_exam_time');
            $table->boolean('display_marks_total');
            $table->boolean('display_marks_per_library');
            $table->boolean('display_marks_percentage');
            // $table->timestamps()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exams');
    }
}
