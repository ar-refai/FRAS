<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Course;
use App\Model\Student;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #this was for trial
        
        // $student = Student::find(1);
        // dump($student->weeks[0]->name);
        // dump($student->weeks[1]->name);
        // dump($student->name);
        // dump($student->phone);
        
         return view('home');
    }
}
