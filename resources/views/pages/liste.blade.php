@extends('default.layaut')

@section('title', $title)

@section('sous_title')
    {{$title}}
@endsection 

@section('contenue')

<table class="table table-striped table-hover">
  <tr>
      <th class="text_color">Matricule</th>
      <th class="text_color">Nom</th>
      <th class="text_color">Prénom</th>
      <th class="text_color">Filière</th>
      <th class="text_color">option</th>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <a href="{{route('carte_details',["etudiant"=>$etudiant])}}" class="btn btn-am btn-success">Détails</a>
        <a href="{{route('carte_edit',["etudiant"=>$etudiant])}}" class="btn btn-am btn-primary">Edite</a>
        <a href="{{route('carte_delete',["etudiant"=>$etudiant])}}" class="btn btn-am btn-danger">Delete</a>
      </td>
  </tr>
</table>

@endsection