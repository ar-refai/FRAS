<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    #id
    #name
    #description
    #dept id 
    #level
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'description',
        'dept_id',
        'level',
    ];
    // relationship one to many between depts and crss
    public function Department()
    {
        return $this->belongsTo('App\Model\Department','dept_id');
    }
    // relationship many to many between stus and crss
    public function Students(){
        return $this->belongsToMany('App\Model\Student','course_student');
    } 
    // relationship many to many between weeks and crss
    public function Weeks(){
        return $this->belongsToMany('App\Model\Week','course_week');
    }

}
