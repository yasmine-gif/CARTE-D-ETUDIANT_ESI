<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Personne_a_prevenir;
use App\Filiere;

class CarteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Ajouter une carte';
        $personne_a_prevenirs = Personne_a_prevenir :: all();
        $filieres = Filiere :: all();

        return view('pages.ajouter', ['title'=>$title], compact('personne_a_prevenirs', 'filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_filiere = request()->validate([
            'filiere_id' => ['required','string']
            ]);

            Filiere::create($data_filiere);

        $data=request()->validate([
            'personne_a_prevenir_id'=>'required|integer',           
            'filiere_id'=>'required|integer',
            'matricule'=> ['required','string'],
            'annee_academic'=> ['required','string'],
            'nom'=> ['required','string'],
            'prenom'=> ['required','string'],
            'cyle'=> ['required','string'],
            'nationalite'=> ['required','string'],
            'photo'=> ['required','image']
          ]);

          $imagePath=request('photo')->store('images','public');
          $etudiant=Etudiant::create([
                'personne_a_prevenir_id'=>$data['personne_a_prevenir_id'],
                'filiere_id'=>$data['filiere_id'],
                'matricule'=>$data[ 'matricule'],
                'annee_academic'=>$data[ 'annee_academic'],
                'nom'=>$data[ 'nom'],
                'prenom'=>$data[ 'prenom'],
                'cyle'=>$data[ 'cyle'],
                'nationalite'=>$data[ 'nationalite'],
                'photo'=>$imagePath
            ]);
        return redirect()->route('Etudiant_store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Liste des cartes';

        return view('pages.liste', ['title'=> $title]);
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
