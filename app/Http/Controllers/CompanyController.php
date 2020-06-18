<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
Use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        // Validazione
        $request->validate($this->validationRules());

        // Fill nuovo record tabella massivamente
        $newData = new Company();
        $newData->fill($data);

        // Save and Check
        $saved = $newData->save();

        if($saved){
            $idNew = Company::find($newData->id);

            return redirect()->route('companies.show',$idNew);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
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

    private function validationRules ($id = null){
        return [
            // 'name' => 'required|max:20',
            // 'age' => 'required|max:3'

            //Use Illuminate\Validation\Rule per utilizzare questo;
            'name' => [
                'required',
                'max:20',
                // Rendi univoco il campo name sulla tabella teachers ma ignora questo id
                Rule::unique('companies')->ignore($id)
            ],
            'employees_number' => [
                'required',
                'numeric',
                'min:1',
                'max:4'
            ],
            'address' => [
                'required',
            ]
        ];
    }
}
