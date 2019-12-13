<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseWeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         #course_id
        #week_id
        Schema::create('course_week', function (Blueprint $table) {
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('week_id');
            // primary key
            $table->primary(['course_id','week_id']);
            // foreign keys
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); 
            $table->foreign('week_id')->references('id')->on('weeks')->onDelete('cascade'); 
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
        //
    }
}
