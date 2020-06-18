@extends('layouts.main')

@section('main-content')

  {{-- DEBUG --}}
  {{-- @dump($companies) --}}

  <section classe="companies">
    <h2 class="text-danger text-center my-5">Partners</h2>
    
    <table class="table">
      <thead>
        <tr class="text-center">
          <th>Name</th>
          <th>Employees Number</th>
          <th>Address</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        @foreach($companies as $company)
        <tr class="text-center">
          <td>{{ $company->name }}</td>
          <td>{{ $company->employees_number }}</td>
          <td>{{ $company->address }}</td>
          <td>
            <a href="{{ route('companies.show', $company->id) }}" class="btn btn-success">Show</a>
          </td>
          <td>
            <a href="#" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <a href="#" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="container text-center">
      <a href="{{ route('companies.create') }}" class="btn btn-danger my-5">Add a new Company</a>
    </div>
    
  </section>
@endsection