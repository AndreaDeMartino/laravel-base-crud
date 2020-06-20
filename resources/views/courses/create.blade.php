@extends('layouts.main')

@section('main-content')
  
<div class="header text-center">
  <h1 class="display-4">Create New Course</h1>
  <div class="container">
    <a href="{{ route('courses.index') }}" class="btn btn-info btn-sm">Courses List</a>
  </div>
</div>

  <div class="container mt-5 w-50 bg-secondary p-4 rounded-lg shadow-lg">
    <form class="text-center" action="{{ route('courses.store') }}" method="POST">
      @csrf
      @method('POST')

      <input class="form-control mb-2" type="text" name="name" placeholder="Name">
      <textarea class="form-control mb-2 text-area" type="text" name="description" placeholder="Description" rows="3"></textarea>
      <input class="form-control mb-2" type="number" name="price" placeholder="Price">
      <input class="form-control mb-2" type="date" name="start" placeholder="Start">
      <input class="form-control mb-2" type="date" name="end" placeholder="End">
      <input class="form-control btn btn-success btn-sm w-25 mt-2" type="submit" value="Create">
    
    </form>
  </div>


@endsection