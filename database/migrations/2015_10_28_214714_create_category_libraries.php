<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryLibraries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_libraries', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('library_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories');
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
        Schema::drop('category_libraries');
    }
}
