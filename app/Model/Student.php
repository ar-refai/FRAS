<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
        #id
        #name
        #phone
        #age
        #sex
        #dept_id
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'age',
        'sex',
        'dept_id',
    ];
    // one to many relation between dept and stu
    public function Department(){
        return $this->belongsTo('App,Model\Department','dept_id');
    }
    // many to many relation between student and course
    public function Courses(){
        return $this->belongsToMany('App\Model\Course','course_student');
    } 
    // many to many relation between student and week
    public function Weeks(){
        return $this->belongsToMany('App\Model\Week','student_week');
    } 
}
