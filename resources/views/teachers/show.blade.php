@extends('layouts.main')

@section('main-content')

<div class="show text-center">

  <h2 class="text-danger my-5">Detail of {{ $teacher->name }}</h2>

  <ul class="list-group">
    <li class="list-group-item">
        ID: {{ $teacher->id }}
    </li>
    <li class="list-group-item">
        Eta: {{ $teacher->age }}
    </li>
    <li class="list-group-item">
        Created: {{ $teacher->created_at }}
    </li>
    <li class="list-group-item">
        Update: {{ $teacher->updated_at }}
    </li>
    <li class=" my-4 list-unstyled">
      <a href="{{ route('teachers.index') }}" class="btn btn-primary">Return to Teachers List</a>
  </li>
  </ul>

</div>


@endsection