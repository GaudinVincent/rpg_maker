@extends('layouts.app')
@section('title')
    Votre personnage a bien été créé !
@endsection
@section('content')
<h3>Détails du personnage:</h3>
<p><b>Nom: </b>{{$myCharacter["characterName"]}}</p>
<p><b>Description: </b>{{$myCharacter["description"]}}</p>
<h3>Stats:</h3>
<p><b>Force: </b>{{$myCharacter["for"]}}</p>
<p><b>Magie: </b>{{$myCharacter["mag"]}} </p>
<p><b>Intelligence </b>{{$myCharacter["int"]}} </p>
<p><b>Agilité: </b>{{$myCharacter["agi"]}} </p>  

    
@endsection