@extends('layouts.main')

@section('main-content')

        <div class="students d-flex justify-content-center">

            @foreach ($students as $student)
            <div class="student card mx-3 text-center w-50">
                <p> Id: {{ $student->id }}</p>
                <p> Nome Studente: {{ $student->name }}</p>
                <p> Età: {{ $student->age }} anni</p>
                <p> Classe: {{ $student->class }}</p>
            </div>
            @endforeach

            <div class="classroom card mx-3 w-50 text-center text-secondary">
                <p> Id: {{ $classroom->id }}</p>
                <p> Nome Classe: {{ $classroom->name }}</p>
                <p> Studenti: {{ $classroom->total_students }} anni</p>
                <p> Piano: {{ $classroom->floor }}</p>
            </div>
        
        </div>  
        
@endsection
