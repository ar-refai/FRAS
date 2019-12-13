<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #student_id
        #course_id
        
        Schema::create('course_student', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('course_id');
            // primary key
            $table->primary(['student_id','course_id']);
            // foreign keys
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade'); 
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); 
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
