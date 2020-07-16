<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class CarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Ajouter une carte';
        return view('pages.ajouter', ['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
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
