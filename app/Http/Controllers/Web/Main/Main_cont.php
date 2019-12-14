<?php

namespace App\Http\Controllers\Web\Main;

use App\Model\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Main_cont extends Controller
{
    public function index(){
        $courses = Course::all();
        $arr['courses'] = $courses;
        return view('Web.Main.main_view',$arr);
    }
    
    
}
