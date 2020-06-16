<?php

namespace App\Http\Controllers;

use App\Student;
use App\Classroom;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        
        // Show all student of class 12
        $students = Student::where('class', 12)->get();

        // Find record with id 1 of classrooms table
        $classrooms = Classroom::all();
        $classroom = $classrooms->find(1);
        
        return view('welcome', compact('students','classroom'));
    }
}
