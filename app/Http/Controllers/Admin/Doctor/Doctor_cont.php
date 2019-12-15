<?php

namespace App\Http\Controllers\Admin\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Doctor;
use App\Model\Department;
use Illuminate\Support\Facades\DB;

class Doctor_cont extends Controller
{
    // this is index fucntion
    public function index(){
        $doctors = Doctor::all();
        $arr['doctors'] = $doctors;
        return view('Admin.Doctor.index_view',$arr);
    }
        // this is the add function 
        public function add(Request $request){
            $doctors = Doctor::all();
            if($request->isMethod('post')){
                // code for the image to be uploaded
                $photo = $request->file('photo');
                $path = $photo->storeAs('user',$photo->getClientOriginalName(),'image');
                DB::table('doctors')->insertGetId(
                    [
                        'name' => $request->name ,
                        'email' => $request->email ,
                        'phone'=> $request->phone,
                        'password'=> $request->password,
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
                $arr['doctors'] = $doctors;
                return view('Admin.Doctor.add_view', $arr);
            }
          
        }
    
        // this is the delete function
        public function delete(Request $request , $id){
            $doctor = Doctor::find($id);
            if($request->isMethod('post')){
                $doctor->delete();
                return redirect(route('Doctor.Index'));
            }
            else{
                $arr['doctor'] = $doctor;
                return view('Admin.Doctor.delete_view',$arr);
            }
        }
}
