<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

    </head>
    <body>
        <div class="container">
            <header class="main-header">
                <h1 class="title text-danger text-center display-4 my-5">
                    Laravel <s>Croft</s> Crud
                </h1>
            </header>

            <main class="main-content d-flex">

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
            </main>

            
        </div>  
    </body>
</html>
