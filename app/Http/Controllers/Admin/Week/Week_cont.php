<?php

namespace App\Http\Controllers\Admin\Week;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Week;
use Illuminate\Support\Facades\DB;

class Week_cont extends Controller
{
            // this is index fucntion
            public function index(){
                $weeks = Week::all();
                $arr['weeks'] = $weeks;
                return view('Admin.Week.index_view',$arr);
            }
                // this is the add function 
                public function add(Request $request){
                    if($request->isMethod('post')){
                        DB::table('weeks')->insertGetId(
                            [
                                'name' => $request->name ,
                            ]
                        );
                        return redirect()->back();
                    }
                    else{
                        $weeks = Week::select('id','name')->get();    
                        $arr['weeks'] = $weeks;
                        return view('Admin.Week.add_view', $arr);
                    }
                  
                }
            
                // this is the delete function
                public function delete(Request $request , $id){
                    $week = Week::find($id);
                    if($request->isMethod('post')){
                        $week->delete();
                        return redirect(route('Week.Index'));
                    }
                    else{
                        $arr['week'] = $week;
                        return view('Admin.Week.delete_view',$arr);
                    }
                }    
    
}
