<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Support\Facades\DB;
use App\Model\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class course_cont extends Controller
{
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
            $departments = DB::table('departments')->select('id','name')->get();
            // for trial
            // dump($departments[0]->id);
            // dump($departments[0]->name);
    
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
}
