@extends('layouts.main')

@section('main-content')
  
  <div class="header text-center">
    <h1 class="display-4">Courses List</h1>
    <div class="container">
      <a href="{{ route('courses.create') }}" class="btn btn-success btn-sm">Add a New Course</a>
    </div>
  </div>

  <div class="container">
    <div class="row">

      @foreach($courses as $course)
      <ul class="col-6 list-group px-5 mt-5">
        <li class="list-group-item active text-center">
          <a class="text-light" href="{{ route('courses.show', $course->id) }}">
            {{ $course->name }}
          </a>  
        </li>
        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Description:</span><span class="text-primary">{{ $course->description }}</span> </li>
        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Price:</span> <span class="text-primary">{{ $course->price }} €</span> </li>
      </ul>
      @endforeach

    </div>
  </div>
  

@endsection