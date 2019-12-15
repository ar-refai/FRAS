<?php

namespace App\Http\Controllers\Admin\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Department;
use Illuminate\Support\Facades\DB;

class Department_cont extends Controller
{
        // this is index fucntion
        public function index(){
            $departments = Department::all();
            $arr['departments'] = $departments;
            return view('Admin.Department.index_view',$arr);
        }
            // this is the add function 
            public function add(Request $request){
                if($request->isMethod('post')){
                    DB::table('departments')->insertGetId(
                        [
                            'name' => $request->name ,
                            'description'=> $request->description,
                        ]
                    );
                    return redirect()->back();
                }
                else{
                    $departments = Department::select('id','name')->get();    
                    $arr['departments'] = $departments;
                    return view('Admin.Department.add_view', $arr);
                }
              
            }
        
            // this is the delete function
            public function delete(Request $request , $id){
                $department = Department::find($id);
                if($request->isMethod('post')){
                    $department->delete();
                    return redirect(route('Department.Index'));
                }
                else{
                    $arr['department'] = $department;
                    return view('Admin.Department.delete_view',$arr);
                }
            }    
}
