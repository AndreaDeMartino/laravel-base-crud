@extends('layouts.main')

@section('main-content')
  
  <h2 class="text-primary text-center mb-5">Add New Company</h2>

  {{-- Errors --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="companies-create d-flex justify-content-center">  

    <form action="{{ route('companies.store') }}" method="POST" class="container">
      @csrf
      @method('POST')

      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Company Name" 
               value="{{ old('name') }}">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="employees_number" placeholder="Company Employees Number"     
               value="{{ old('employees_number') }}">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Company Address" 
               value="{{ old('address') }}">
      </div>
      
      <input type="submit" value="Add" class="btn btn-danger w-100">
    
    </form>
  </div>

@endsection
