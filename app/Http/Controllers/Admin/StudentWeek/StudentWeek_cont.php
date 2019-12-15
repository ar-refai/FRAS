<?php

namespace App\Http\Controllers\Admin\StudentWeek;
use App\Model\Course;
use App\Model\Department;
use App\Model\Week;
use App\Model\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentWeek_cont extends Controller
{
    public function index(){
        $studentWeeks = DB::table('student_week')->select('*')->get();
        $arr['studentWeeks'] = $studentWeeks;
        return view('Admin.StudentWeek.index_view',$arr);
}
// this is the add function 
public function add(Request $request){
    $studentWeeks = DB::table('student_week')->select('*')->get();
    $courses = Course::all();
    $students = Student::all();
    $weeks = Week::all();
    if($request->isMethod('post')){
        DB::table('student_week')->insert(
            [
                'week_id' => $request->week_id ,
                'student_id'=> $request->student_id,
                'Attended'=>$request->attendance,
            ]
        );
        return redirect()->back();
    }
    else{
        $arr['studentWeeks'] = $studentWeeks;
        $arr['courses'] = $courses;
        $arr['students'] = $students;
        $arr['weeks'] = $weeks;
        return view('Admin.StudentWeek.add_view', $arr);
    }
  
}
// this is the delete function
public function delete(Request $request , $week_id){
    $studentWeeks = DB::table('student_week')
    ->where('student_id',$request->student_id)
    ->where('week_id',$week_id)
    ->get();
    if($request->isMethod('post')){
        DB::table('student_week')
    ->where('student_id',$request->student_id)
    ->where('week_id',$week_id)
    ->delete();
        return redirect(route('StudentWeek.Index'));
    }
    else{
        $arr['studentWeeks'] = $studentWeeks;
        $arr['week_id'] = $week_id;
        return view('Admin.StudentWeek.delete_view',$arr);
    }
}}
