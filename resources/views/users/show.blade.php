@extends('layouts.app')
@section('title')
  Profil de {{$userID["pseudo"]}}
@endsection
@section('content')
<h3>Informations personnelles</h3>
<p><b>Nom de famille: </b>{{$userID["lastname"]}}</p>
<p><b>Prénom: </b>{{$userID["firstname"]}}</p>
<p><b>Email: </b>{{$userID["email"]}}</p>
<p><b>Description: </b> </p>
<p><b>Personnages: </b> </p>
<p><b>Groupes: </b></p>  
@endsection