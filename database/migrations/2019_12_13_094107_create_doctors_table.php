<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #id
        #name
        #email
        #password
        #phone
        #age
        #sex
        #dept_id
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->unsignedInteger('age');
            $table->string('sex');
            $table->unsignedInteger('dept_id');
            // foreign keys
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade'); 
            #has forein key for departemt then this is his child
 
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
        Schema::dropIfExists('doctors');
    }
}
