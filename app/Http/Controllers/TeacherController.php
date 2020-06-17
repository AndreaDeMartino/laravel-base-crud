<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ottieni tutti i name passati dalla form
        $data = $request->all();
       
        //Valida i campi arrivati dalla form
        $request->validate([
            'name' => 'required|max:20',
            'age' => 'max:3'
        ]);

        //Crea una nuova variabile con la classe del modello creato
        $teacherNew = new Teacher();

        //Assegna i valori ottenuti dalla form alla variabile
        $teacherNew->name = $data['name'];
        $teacherNew->age = $data['age'];

        //Salva i dati nel db
        $saved = $teacherNew->save();

        // Check se i dati sono stati salvati
        if ($saved) {
            $idteacherNew = Teacher::find($teacherNew->id);
            //Redirect alla pagina show passando id creato
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
