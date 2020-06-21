@extends('layouts.main')

@section('main-content')
    
  <div class="header text-center">
    <h1 class="display-4"> Edit: {{ $course->name }} </h1>
    <div class="container">
      <a href="{{ route('courses.index') }}" class="btn btn-info btn-sm">Courses List</a>
    </div>
  </div>

  <div class="container mt-5">
    <form action="{{ route('courses.update',$course->id) }}" method="post">
      @csrf
      @method('PATCH')

      <label for="name">Nome Corso</label>
      <input class="form-control" type="text" value="{{ $course->name}}" name="name" id ="name">
      <label for="description">Descrizione</label>
      <input class="form-control" type="text" value="{{ $course->description}}" name="description" id ="description">
      <label for="price">Prezzo</label>
      <input class="form-control" type="text" value="{{ $course->price}}" name="price" id ="price">
      <label for="start">Inizio Corso</label>
      <input class="form-control" type="date" value="{{ $course->start}}" name ="start" id ="start">
      <label for="end">Fine Corso</label>
      <input class="form-control" type="date" value="{{ $course->end}}" name ="end" id ="end">
      <input class="form-control btn btn-dark mt-4" type="submit" value="Edit">
    </form>
  </div>
  

@endsection