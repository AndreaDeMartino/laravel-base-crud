@extends('layouts.main')

@section('main-content')

<div class="show text-center">

  <h2 class="text-danger my-5">Detail of {{ $company->name }}</h2>

  <ul class="list-group">
    <li class="list-group-item">
        ID: {{ $company->id }}
    </li>
    <li class="list-group-item">
        Employees Number: {{ $company->employees_number }}
    </li>
    <li class="list-group-item">
        Address: {{ $company->address }}
    </li>
    <li class="list-group-item">
        Created: {{ $company->created_at }}
    </li>
    <li class="list-group-item">
        Update: {{ $company->updated_at }}
    </li>
    <li class=" my-4 list-unstyled">
      <a href="{{ route('companies.index') }}" class="btn btn-danger">Companies List</a>
  </li>
  </ul>

</div>


@endsection