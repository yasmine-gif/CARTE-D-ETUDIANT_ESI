@extends('default.layaut')

@section('title', $title)

@section('sous_title')
    {{$title}}
@endsection 

@section('contenue')

<form action="" method="post">
    @csrf
        <div class="row form-group">
            <div class="col-md-6">
                <label for="mat">Matricule:</label>
                <input type="text" name="matricule" id="mat" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="annee_academic">Année academique:</label>
                <input type="date" name="annee_academic" id="annee_academic" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="prenom">Prénom:</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="cycle">Cycle:</label>
                <input type="text" name="cycle" id="cycle" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="nationalite">Nationlité:</label>
                <input type="text" name="nationalite" id="nationalite" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="form-group row-md-6">
                <div id="photo"><img id="profil" class="iconapp" src=""></div>
              </div> 
            </div>
            <input type="file" class="form-control" id="inputPassword4" oninput="afficherPhoto(this,'profil')">          
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success w-40 float-right">Creer</button>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-danger w-40 float-right">Creer</button>
            </div>
        </div>
    </form>
    

@endsection