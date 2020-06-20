@extends('layouts.main')

@section('main-content')
  
<div class="header text-center">
  <h1 class="display-4"> {{ $course->name }} </h1>
  <div class="container">
    <a href="{{ route('courses.index') }}" class="btn btn-info btn-sm">Courses List</a>
  </div>
</div>

<div class="container mt-5">
  <div class="row d-flex justify-content-center">

    <ul class="list-group">
      <li class="list-group-item bg-warning text-center">
          {{ $course->name }}
      </li>
      <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Description:</span><span class="text-primary">{{ $course->description }}</span> </li>
      <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Price:</span> <span class="text-primary">{{ $course->price }} €</span> </li>
      <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Start:</span> <span class="text-primary">{{ $course->start }}</span> </li>
      <li class="list-group-item d-flex justify-content-between"><span class="text-muted">End:</span> <span class="text-primary">{{ $course->end }}</span> </li>
    </ul>

  </div>
</div>
  

@endsection