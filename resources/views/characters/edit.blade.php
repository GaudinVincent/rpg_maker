@extends('layouts.app')
@section('title')
Modifier le personnage
@endsection
@section('content')
        <form action="{{route('characters.update', ['character' => $characterID["id"]])}}" method="post" class="creationForm">
            @csrf
            @method('PUT')
            <label for="characterName">Nom du personnage:</label>
            <input type="text" name="characterName" id="characterName" value="{{$characterID["characterName"]}}" >
            <label for="classe">Choisissez une classe:</label>
            <select name="classe" id="classe">
                <option value="guerrier">Guerrier</option>
                <option value="mage">Mage</option>
                <option value="druide">Druide</option>
                <option value="assassin">Assassin</option>
                <option value="berserker">Berserker</option>
                <option value="archer">Archer</option>
            </select>
            <label for="description">Description du personnage:</label>
            <input type="text" name="description" id="description" value="{{$characterID["description"]}}">
            <button type="submit">Valider la modification</button>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>   
<div class="profileCategory"> 
    <h3>Stats:</h3>
    <p><b>Force: </b>{{$characterID["for"]}}</p>
    <p><b>Magie: </b>{{$characterID["mag"]}} </p>
    <p><b>Intelligence </b>{{$characterID["int"]}} </p>
    <p><b>Agilité: </b>{{$characterID["agi"]}} </p>
</div>
    
    
@endsection