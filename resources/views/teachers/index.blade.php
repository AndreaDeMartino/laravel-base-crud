@extends('layouts.main')

@section('main-content')

    <div class="teachers-container d-flex">

        @foreach ($teachers as $teacher)
        <div class="teacher card mx-3 text-center w-50">
            <p> Id: {{ $teacher->id }}</p>
            <p> Nome teacher: {{ $teacher->name }}</p>
            <p> Età: {{ $teacher->age }} anni</p>
        </div>
        @endforeach

    </div>  
        
@endsection
