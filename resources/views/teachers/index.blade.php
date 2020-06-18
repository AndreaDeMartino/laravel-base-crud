@extends('layouts.main')

@section('main-content')

    {{-- Check su sessione ritornata da deleted --}}
    @if(session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }} successfully deleted
        </div>
    @endif

    <h2 class="text-primary text-center mb-5">Teachers</h2>

    <div class="teachers-container d-flex">

        @foreach ($teachers as $teacher)
        <div class="teacher card mx-3 text-center w-50">
            <p class="pt-3"> Nome: {{ $teacher->name }}</p>
            <p class="pt-3"> Età: {{ $teacher->age }} anni</p>
            <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-secondary btn-sm mx-3">Show</a>
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary btn-sm mx-3 my-3">Edit</a>
            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger btn-sm mb-3" type="submit" value="Delete"> 
            </form>
        </div>
        @endforeach

    </div>  

    <a href="{{ route('teachers.create') }}" class="btn btn-success w-100 my-5">Add a new Teacher</a>
@endsection
