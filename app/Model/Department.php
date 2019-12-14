<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    #id
    #name
    #description
    protected $table = 'departments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'description',

    ];
    // relationship one to many between depts and crss
    public function Courses(){
        return $this->hasMany('App\Model\Course','dept_id');
    }
    // relationship one to many between depts and stus
    public function Students(){
        return $this->hasMany('App\Model\Student','dept_id');
    }
    // relationship one to many between depts and docs
    public function Doctors(){
        return $this->hasMany('App\Model\Doctor','dept_id');
    }

}
