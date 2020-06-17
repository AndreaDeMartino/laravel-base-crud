<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    function index(){
        
        // Show all student of class 12
        $students = Student::where('class', 12)->get();
        
        return view('static-pages.students', compact('students'));
    }
}
