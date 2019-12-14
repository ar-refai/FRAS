<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Support\Facades\DB;
use App\Model\Course;
use App\Model\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class course_cont extends Controller
{
    // this is the index function
    public function index(){
        $courses = Course::select('*')->get();
        $arr['courses'] = $courses;
        return view('Admin.Course.index_view' , $arr);
    }
    // this is the add function 
    public function add(Request $request){
        if($request->isMethod('post')){
            //  $courses = Course::create($request->all());
            DB::table('courses')->insertGetId(
                [
                    'name' => $request->name ,
                    'description'=> $request->description,
                    'level'=> $request->level,
                    'dept_id'=> $request->department,
                ]
            );
            return redirect()->back();
        }
        else{
            $departments = Department::select('id','name')->get();    
            $arr['departments'] = $departments;
            return view('Admin.Course.add_view', $arr);
        }
      
    }
    // this is the update function
    public function update(Request $request ,$id){
        $course = Course::find($id);
        // post means that he submmited the form
        if($request->isMethod('post')){
            DB::table('courses')
            ->where('id',$id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'dept_id' => $request->department,
                'level' => $request->level,
            ]);
            return redirect()->back();
        }
        else{
            $departments = DB::table('departments')->select('id','name')->get();
            $arr['departments'] = $departments;
            $arr['course'] = $course;
            return view('Admin.Course.update_view',$arr);
        }
    }
    // this is the delete function
    public function delete(Request $request , $id){
        $course = Course::find($id);
        if($request->isMethod('post')){
            $course->delete();
            return redirect(route('Course.Index'));
        }
        else{
            $arr['course'] = $course;
            return view('Admin.Course.delete_view',$arr);
        }
    }
}
