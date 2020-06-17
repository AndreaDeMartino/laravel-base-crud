@extends('layouts.main')

@section('main-content')

    <h2 class="text-primary text-center mb-5">Teachers</h2>

    <div class="teachers-container d-flex">

        @foreach ($teachers as $teacher)
        <div class="teacher card mx-3 text-center w-50">
            <p class="pt-3"> Nome: {{ $teacher->name }}</p>
            <p class="pt-3"> Età: {{ $teacher->age }} anni</p>
        </div>
        @endforeach

    </div>  
        
@endsection
