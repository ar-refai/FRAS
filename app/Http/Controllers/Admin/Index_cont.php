<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\Course;
use App\Model\Doctor;
use App\Model\Student;
use App\Model\Photo;
use App\Model\Week;

class Index_cont extends Controller
{
    public function index() {
        $departments = Department::all();
        $courses = Course::all();
        $doctors = Doctor::all();
        $students = Student::all();
        $photos = Photo::all();
        $weeks = Week::all();
        $arr['departments'] = $departments;
        $arr['courses'] = $courses;
        $arr['doctors'] = $doctors;
        $arr['students'] = $students;
        $arr['photos'] = $photos;
        $arr['weeks'] = $weeks;
        return view('Admin.admin_view',$arr);
    }
}
