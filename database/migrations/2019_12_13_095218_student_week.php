<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentWeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #student_id
        #week_id
        #attend
        
        Schema::create('student_week', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('week_id');
            $table->boolean('Attended');
            // primary key
            $table->primary(['student_id','week_id']);
            // foreign keys
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade'); 
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
