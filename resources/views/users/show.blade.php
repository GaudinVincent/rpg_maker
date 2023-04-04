<!--Détails du profil d'un seul utilisateur !-->
@extends('layouts.app')
@section('title')
  Profil de {{$userID["pseudo"]}}
@endsection
@section('content')
<h3>Informations personnelles</h3>
<div class="profileCategory">
  <p><b>Nom de famille: </b>{{$userID["lastname"]}}</p>
  <p><b>Prénom: </b>{{$userID["firstname"]}}</p>
  <p><b>Email: </b>{{$userID["email"]}}</p>
  <p><b>Personnages: </b><a href="">Voir les personnages</a> </p>
  <p><b>Groupes: </b><a href="">Voir les groupes</a></p>  

</div>

@endsection