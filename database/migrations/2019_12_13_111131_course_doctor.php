<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #doctor_id
        #course_id
        #attend
        Schema::create('course_doctor', function (Blueprint $table) {
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('course_id');
            // primary key
            $table->primary(['doctor_id','course_id']);
            // foreign keys
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade'); 
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
