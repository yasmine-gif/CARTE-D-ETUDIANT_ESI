@extends('default.layaut')

@section('title', $title)

@section('sous_title')
    {{$title}}
@endsection 

@section('contenue')


<div class="container-fluid mt-4">
    <form action="{{route('carte_store')}}" method="post">
    @csrf
        <div class="row form-group">
            <div class="col-md-6">
                <label for="mat" class="text_color">Matricule :</label>
                <input type="text" name="matricule" id="mat" class="form-control" placeholder="exemple: ESI/0012">
            </div>
            <div class="col-md-6">
                <label for="annee_academic" class="text_color">Année academique :</label>
                <input type="text" name="annee_academic" id="annee_academic" class="form-control" placeholder="entre l'année académique.. exemple: 1980/1981">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="nom" class="text_color">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="entre un nom...">
            </div>
            <div class="col-md-6">
                <label for="prenom" class="text_color">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="entre un prénom">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="cycle" class="text_color">Cycle :</label>
                <input type="text" name="cycle" id="cycle" class="form-control" placeholder="entre le cycle">
            </div>
            <div class="col-md-6">
                <label for="nationalite" class="text_color">Nationlité :</label>
                <input type="text" name="nationalite" id="nationalite" class="form-control" placeholder="entre la nationalité...">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <span class="text_color">Filière existe :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="" checked>
                <label class="form-check-label text_color" for="inlineRadio1">Oui</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="">
                <label class="form-check-label text_color" for="inlineRadio2">Non</label>
              </div>
            </div>
            <div class="col-md-6">
                <span id="selecte">
                <label for="select" class="text_color ">Filière :</label>
                <select class="custom-select custom-select-sm" id="select" name="filiere">
                    <option >choisir...</option>
                    @foreach ($filieres as $filiere)
                        <option value="{{ $filiere->id }}">{{ $filiere->filiere}}</option>   
                    @endforeach
                </select>
                </span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <span class="text_color">Personne à prevenir existe :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="" checked>
                <label class="form-check-label text_color" for="inlineRadio3">Oui</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="">
                <label class="form-check-label text_color" for="inlineRadio4">Non</label>
              </div>
            </div>
            <div class="col-md-6">
                <span id="select2">
                    <label for="personne" class="text_color">Personne à prevenir :</label>
                    <select class="custom-select custom-select-sm" name="personne_a_prevenir_id">
                        <option >choisir...</option>
                        @foreach ($personne_a_prevenirs as $personne_a_prevenir)
                            <option value="{{ $personne_a_prevenir->id }}">{{ $personne_a_prevenir->nom}} {{ $personne_a_prevenir->prenom}}</option>   
                        @endforeach
                    </select>
                </span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="add" class="text_color">Ajouter une photo :</label>
                <input type="file" name="photo" id="add" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success w-40">Enregistrer</button>&nbsp&nbsp&nbsp
                <button type="submit" class="btn btn-danger w-40">annuler</button>
            </div>
        </div>
    </form>
</div>
    

@endsection