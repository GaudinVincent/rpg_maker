@extends('layouts.app')
@section('title')
Détails du personnage   
@endsection
@section('content')
<div class="profileCategory">
    <p><b>Nom: </b>{{$characterID["characterName"]}}</p>
    <p><b>Description: </b>{{$characterID["description"]}}</p>
    <h3>Stats:</h3>
    <p><b>Force: </b>{{$characterID["for"]}}</p>
    <p><b>Magie: </b>{{$characterID["mag"]}} </p>
    <p><b>Intelligence </b>{{$characterID["int"]}} </p>
    <p><b>Agilité: </b>{{$characterID["agi"]}} </p>  
</div>

@endsection