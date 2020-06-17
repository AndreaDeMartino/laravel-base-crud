@extends('layouts.main')

@section('main-content')

    <h2 class="text-primary text-center mb-5">Teachers</h2>

    <div class="teachers-container d-flex">

        @foreach ($teachers as $teacher)
        <div class="teacher card mx-3 text-center w-50">
            <p class="pt-3"> Nome: {{ $teacher->name }}</p>
            <p class="pt-3"> Età: {{ $teacher->age }} anni</p>
            <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-secondary btn-sm m-3">Dettagli</a>
        </div>
        @endforeach

    </div>  

    <a href="{{ route('teachers.create') }}" class="btn btn-danger w-100 my-5">Add a new Teacher</a>
@endsection
