<?php

namespace App\Http\Controllers;

use App\Student;
use App\Classroom;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        
        $students = Student::all();

        $classrooms = Classroom::all();
        
        return view('welcome', compact('students','classrooms'));
    }
}
