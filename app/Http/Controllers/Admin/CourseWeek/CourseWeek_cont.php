<?php

namespace App\Http\Controllers\Admin\CourseWeek;
use App\Model\Course;
use App\Model\Department;
use App\Model\Week;
use App\Model\Student;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseWeek_cont extends Controller
{
    public function index(){
        $courseWeeks = DB::table('course_week')->select('course_id', 'week_id')->get();
        $arr['courseWeeks'] = $courseWeeks;
        return view('Admin.CourseWeek.index_view',$arr);
}
// this is the add function 
public function add(Request $request){
    $courseWeeks = DB::table('course_week')->select('course_id', 'week_id')->get();
    $courses = Course::all();
    $students = Student::all();
    $weeks = Week::all();
    
    if($request->isMethod('post')){
        DB::table('course_week')->insert(
            [
                'week_id' => $request->week_id ,
                'course_id'=> $request->course_id,
            ]
        );
        return redirect()->back();
    }
    else{
        $arr['courseWeeks'] = $courseWeeks;
        $arr['courses'] = $courses;
        $arr['students'] = $students;
        $arr['weeks'] = $weeks;
        return view('Admin.CourseWeek.add_view', $arr);
    }
  
}
// this is the delete function
public function delete(Request $request , $week_id){
    $courseWeeks = DB::table('course_week')
    ->where('course_id',$request->course_id)
    ->where('week_id',$week_id)
    ->get();
    if($request->isMethod('post')){
        DB::table('course_week')
    ->where('course_id',$request->course_id)
    ->where('week_id',$week_id)
    ->delete();
        return redirect(route('CourseWeek.Index'));
    }
    else{
        $arr['courseWeeks'] = $courseWeeks;
        $arr['week_id'] = $week_id;
        return view('Admin.CourseWeek.delete_view',$arr);
    }
}

}
