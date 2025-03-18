<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $personnes = [
            [
                'nom' => 'ABALO',
                'prenom' => 'Justin',
                'age' => 13,
                'sexe' => 'Masculin'
            ],
            [
                'nom' => 'IDOH',
                'prenom' => 'Anicet',
                'age' => 49,
                'sexe' => 'Masculin'
            ],
            [
                'nom' => 'KOUAME',
                'prenom' => 'Amande',
                'age' => 33,
                'sexe' => 'Feminin'
            ],
            [
                'nom' => 'MARDJA',
                'prenom' => 'Lucie',
                'age' => 17,
                'sexe' => 'Feminin'
            ],
            [
                'nom' => 'KOUAME',
                'prenom' => 'Amande',
                'age' => 33,
                'sexe' => 'Feminin'
            ],

        [
            'nom' => 'KOUAME',
            'prenom' => 'Amande',
            'age' => 33,
            'sexe' => 'Feminin'
        ]
        ];
        return view('students.index', compact('personnes'));
    }
    public function indexStudent()
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }
    public function show(Request $request)
    {
        dd($request);
        // $student = Student::find($id);
        // return view('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'tel' => 'required',
        ]);
        $student = new Student();
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->age = $request->age;
        $student->tel = $request->tel;
        $student->save();
        return redirect()->route('students.list')->with('success', 'Student created successfully.');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->age = $request->age;
        $student->tel = $request->tel;
        $student->save();
        return redirect()->route('students.list')->with('success', 'Student updated successfully.');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.list')->with('success', 'Student deleted successfully.');
    }

}
