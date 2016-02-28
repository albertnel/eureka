<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_libraries', function (Blueprint $table) {
            $table->integer('exam_id')->unsigned();
            $table->integer('library_id')->unsigned();
            // $table->timestamps()->useCurrent();

            $table->foreign('exam_id')
                ->references('id')->on('exams');
            $table->foreign('library_id')
                ->references('id')->on('libraries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exam_libraries');
    }
}
