@extends('layouts.main')

@section('main-content')
  
  <h2 class="text-primary text-center mb-5">Add New Teacher</h2>

  @if ($errors->any())

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>

  @endif


  <div class="teachers-create d-flex justify-content-center">  

    <form action="{{ route('teachers.store') }}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Teacher Name">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="age" placeholder="Teacher Age">
      </div>
      
      <input type="submit" value="Add" class="btn btn-danger w-100">
    
    </form>
  </div>

@endsection
