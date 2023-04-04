@extends('layouts.app')
@section('title')
    Votre personnage a bien été créé !
@endsection
@section('content')
<div class="profileCategory">
    <p><b>Nom: </b>{{$myCharacter["characterName"]}}</p>
    <p><b>Description: </b>{{$myCharacter["description"]}}</p>
    <p><b>Classe: </b>{{$myCharacter["classe"]}}</p>
    <h3>Stats:</h3>
    <p><b>Force: </b>{{$myCharacter["for"]}}</p>
    <p><b>Magie: </b>{{$myCharacter["mag"]}} </p>
    <p><b>Intelligence </b>{{$myCharacter["int"]}} </p>
    <p><b>Agilité: </b>{{$myCharacter["agi"]}} </p>  
</div>

    
@endsection