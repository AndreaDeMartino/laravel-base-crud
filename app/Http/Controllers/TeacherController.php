<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $request->validate($this->validationRules());

        //Crea una nuova variabile con la classe del modello creato
        $teacherNew = new Teacher();

        //Assegna i valori ottenuti dalla form alla variabile
        // $teacherNew->name = $data['name'];
        // $teacherNew->age = $data['age'];

        //Oppure puoi farlo in modo massivo
        $teacherNew->fill($data);

        //Salva i dati nel db
        $saved = $teacherNew->save();

        // Check se i dati sono stati salvati
        if ($saved) {
            $idteacherNew = Teacher::find($teacherNew->id);

            //Redirect alla pagina show passando id creato
            return redirect()->route('teachers.show', $idteacherNew);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Teacher $teacher) //In questo modo il param della show effettua già un find dell'id del modello teacher
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data = $request->all();

        $request->validate($this->validationRules($teacher->id));
        
        $saved = $teacher->update($data);

        if($saved){    
            return redirect()->route('teachers.show', $teacher->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //Referenza entità da eliminare
        $ref = $teacher->name;

        $deleted = $teacher->delete();

        if($deleted){
            // Passo anche la referenza alla index con with
            return redirect()->route('teachers.index')->with('deleted', $ref);
        }
    }

    /****************************************************
    * Utility Methods
    ****************************************************/

    // Validation Rules
    // Se inserisci id fa il controllo sull unique di name altrimenti no (come nella view store)
    private function validationRules ($id = null){
        return [
            // 'name' => 'required|max:20',
            // 'age' => 'required|max:3'

            //Use Illuminate\Validation\Rule per utilizzare questo;
            'name' => [
                'required',
                'max:20',
                // Rendi univoco il campo name sulla tabella teachers ma ignora questo id
                Rule::unique('teachers')->ignore($id)
            ],
            'age' => [
                'required'
            ]
        ];
    }

}
