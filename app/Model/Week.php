<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
        #id
        #name
        protected $table = 'weeks';
        protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'name',
        ];
        // many to many relation between week and course
        public function Courses(){
        return $this->belongsToMany('App\Model\Course','course_week');
         } 
       // many to many relation between student and week
       public function Students(){
        return $this->belongsToMany('App\Model\Student','student_week');
        }
    
}
