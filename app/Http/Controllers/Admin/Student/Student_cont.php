<?php

namespace App\Http\Controllers\Admin\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Model\Department;
use Illuminate\Support\Facades\DB;


class Student_cont extends Controller
{
    // this is index fucntion
    public function index(){
        $students = Student::all();
        $arr['students'] = $students;
        return view('Admin.Student.index_view',$arr);
    }
        // this is the add function 
        public function add(Request $request){
            if($request->isMethod('post')){
                // code for the image to be uploaded
                $photo = $request->file('photo');
                $path = $photo->storeAs('user',$photo->getClientOriginalName(),'image');
                DB::table('students')->insertGetId(
                    [
                        'name' => $request->name ,
                        'phone'=> $request->phone,
                        'age'=> $request->age,
                        'sex'=> $request->sex,
                        'dept_id'=> $request->department,
                        'path' => $path,
                    ]
                );
                return redirect()->back();
            }
            else{
                $departments = Department::select('id','name')->get();    
                $arr['departments'] = $departments;
                return view('Admin.Student.add_view', $arr);
            }
          
        }
    
        // this is the delete function
        public function delete(Request $request , $id){
            $student = Student::find($id);
            if($request->isMethod('post')){
                $student->delete();
                return redirect(route('Student.Index'));
            }
            else{
                $arr['student'] = $student;
                return view('Admin.Student.delete_view',$arr);
            }
        }
}
