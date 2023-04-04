@extends('layouts.app')
@section('title')
Détails du personnage   
@endsection
@section('content')
<div class="profileCategory">
    <p><b>Nom: </b>{{$characterID["characterName"]}}</p>
    <p><b>Description: </b>{{$characterID["description"]}}</p>
    <p><b>Classe: </b>{{$characterID["classe"]}}</p>
    <h3>Stats:</h3>
    <p><b>Force: </b>{{$characterID["for"]}}</p>
    <p><b>Magie: </b>{{$characterID["mag"]}} </p>
    <p><b>Intelligence </b>{{$characterID["int"]}} </p>
    <p><b>Agilité: </b>{{$characterID["agi"]}} </p>
    <button><a href="{{route('characters.edit', ['character' => $characterID['id']])}}">Modifier le personnage</a></button>
    <form action="{{route('characters.destroy', ['character' => $characterID['id']])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer le personnage</button>
    </form>
    
</div>
@endsection