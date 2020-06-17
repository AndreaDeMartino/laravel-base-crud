@extends('layouts.main')

@section('main-content')

    <h2 class="text-primary text-center mb-5">Students</h2>
    
    <div class="students d-flex justify-content-center">


        @foreach ($students as $student)
        <div class="student card mx-3 text-center w-50">
            <p class="pt-3"> Nome Studente: {{ $student->name }}</p>
            <p class="pt-3"> Età: {{ $student->age }} anni</p>
            <p class="pt-3"> Classe: {{ $student->class }}</p>
        </div>
        @endforeach
        
    </div>  
    
@endsection
