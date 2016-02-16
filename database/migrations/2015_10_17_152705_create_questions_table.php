<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('library_id')->unsigned();
            $table->string('question_code');
            $table->text('question');
            $table->decimal('marks', 3, 1);
            $table->decimal('marks_negative', 3, 1);
            $table->tinyInteger('difficulty')->unsigned();
            $table->boolean('case_sensitive');
            $table->boolean('randomize_options');
            $table->tinyInteger('num_options_to_display')->unsigned();
            $table->boolean('active');
            $table->timestamps()->useCurrent();

            $table->foreign('library_id')
                ->references('id')
                ->on('libraries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
