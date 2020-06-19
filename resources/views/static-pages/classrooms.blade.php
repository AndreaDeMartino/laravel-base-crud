@extends('layouts.main')

@section('main-content')

    <h2 class="text-primary text-center mb-5">Classrooms</h2>
    
    <div class="classrooms d-flex justify-content-center">


        @foreach ($classrooms as $classroom)
        <div class="classroom card mx-3 w-50 text-center">
            <p class="pt-3"> Nome Classe: {{ $classroom->name }}</p>
            <p class="pt-3"> Totale Studenti: {{ $classroom->total_students }}</p>
            <p class="pt-3"> Piano: {{ $classroom->floor }}</p>
        </div>
        @endforeach

    </div>  
        
@endsection
