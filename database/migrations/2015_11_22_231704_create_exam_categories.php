<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_categories', function (Blueprint $table) {
            $table->integer('exam_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps()->useCurrent();

            $table->foreign('exam_id')
                ->references('id')->on('exams');
            $table->foreign('category_id')
                ->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exam_categories');
    }
}
