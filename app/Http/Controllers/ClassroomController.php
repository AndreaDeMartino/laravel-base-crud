<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    function index(){

        // Show all Classrooms
        $classrooms = Classroom::all();

        return view('static-pages.classrooms', compact('classrooms'));
    }
}
