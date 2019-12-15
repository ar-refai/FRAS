<?php

namespace App\Http\Controllers\Admin\CourseStudent;
use App\Model\Course;
use App\Model\Department;
use App\Model\Student;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseStudent_cont extends Controller
{
    public function index(){
            $courseStus = DB::table('course_student')->select('course_id', 'student_id')->get();
            $arr['courseStus'] = $courseStus;
            return view('Admin.CourseStudent.index_view',$arr);
    }
    // this is the add function 
    public function add(Request $request){
        $courseStus = DB::table('course_student')->select('course_id', 'student_id')->get();
        $courses = Course::all();
        $students = Student::all();
        
        if($request->isMethod('post')){
            DB::table('course_student')->insert(
                [
                    'student_id' => $request->student_id ,
                    'course_id'=> $request->course_id,
                ]
            );
            return redirect()->back();
        }
        else{
            $arr['courseStus'] = $courseStus;
            $arr['courses'] = $courses;
            $arr['students'] = $students;
            return view('Admin.CourseStudent.add_view', $arr);
        }
      
    }
    // this is the delete function
    public function delete(Request $request , $student_id){
        $courseStus = DB::table('course_student')
        ->where('course_id',$request->course_id)
        ->where('student_id',$student_id)
        ->get();
        if($request->isMethod('post')){
            DB::table('course_student')
        ->where('course_id',$request->course_id)
        ->where('student_id',$student_id)
        ->delete();
            return redirect(route('CourseStudent.Index'));
        }
        else{
            $arr['courseStus'] = $courseStus;
            $arr['student_id'] = $student_id;
            return view('Admin.CourseStudent.delete_view',$arr);
        }
    }

}
