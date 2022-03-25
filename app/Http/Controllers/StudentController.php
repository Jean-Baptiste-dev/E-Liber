<?php

namespace App\Http\Controllers;
use App\Http\Requests\EtudiantRequest;
use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::All();
        $niveaux = Niveau::All();
        $students = Student::All();

        return view('admin.etudiant.index', compact('filieres', 'niveaux', 'students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $filieres = Filiere::All();
        $niveaux = Niveau::All();

        return view('admin.etudiant.create', compact('filieres', 'niveaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantRequest $request)
    {
        Student::create($request->all());
    
        return redirect()
            ->route('liste_etudiant')
            ->with('info', 'Vous venez  d \'inscrire un nouvel étudiant ');
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
