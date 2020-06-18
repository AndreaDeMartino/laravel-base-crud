<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Crud</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="nav-brand text-light">
                LaravelCrud
            </div>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('students') }}">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('classrooms') }}">Classrooms</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a></li>
                <li class="nav-item"><a href="{{ route('companies.index') }}" class="nav-link">Partners Companies</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
        </nav>
    </header>