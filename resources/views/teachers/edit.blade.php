@extends('layouts.main')

@section('main-content')
  
  <h2 class="text-primary text-center mb-5">Edit</h2>

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

    <form action="{{ route('teachers.update', $teacher->id) }}" method="post">
      @csrf
      @method('PATCH')

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Teacher Name" id='name'
               {{-- In questo modo, trattieni old e metti un primo valore standard --}}
               value="{{ old('name',$teacher->name) }}">
      </div>

      <div class="form-group">
          <label for="age">Età</label>
        <input type="text" class="form-control" name="age" placeholder="Teacher Age" id = 'age'
               {{-- In questo modo, trattieni old e metti un primo valore standard --}}
               value="{{ old('age',$teacher->age) }}">
      </div>
      
      <input type="submit" value="Edit" class="btn btn-danger w-100">
    
    </form>
  </div>

@endsection
