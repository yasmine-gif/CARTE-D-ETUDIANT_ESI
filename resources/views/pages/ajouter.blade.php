@extends('default.layaut')

@section('title', $title)

@section('sous_title')
    {{$title}}
@endsection 

@section('contenue')


<div class="container-fluid mt-4">
    <form action="" method="post">
    @csrf
        <div class="row form-group">
            <div class="col-md-6">
                <label for="mat" class="text_color">Matricule :</label>
                <input type="text" name="matricule" id="mat" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="annee_academic" class="text_color">Année academique :</label>
                <input type="text" name="annee_academic" id="annee_academic" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="nom" class="text_color">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="prenom" class="text_color">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="cycle" class="text_color">Cycle :</label>
                <input type="text" name="cycle" id="cycle" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nationalite" class="text_color">Nationlité :</label>
                <input type="text" name="nationalite" id="nationalite" class="form-control">
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
                <label for="nationalite" class="text_color">Filière :</label>
                <select class="custom-select custom-select-sm">
                    <option selected>Open this select menu</option>
                </select>
                <label for="filiere" class="text_color">Nouveau filière :</label>
                <input type="text" name="filiere" id="filiere" class="form-control">
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
                <label for="personne" class="text_color">Personne à prevenir :</label>
                <select class="custom-select custom-select-sm">
                    <option selected>Open this select menu</option>
                </select>
                <span><a href="" style="color: #d02525">clickez ajouter une personne à prevenir</a></span>
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