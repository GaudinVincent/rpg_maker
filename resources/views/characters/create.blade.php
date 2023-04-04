@extends('layouts.app')
@section('title')
Nouveau personnage
@endsection
@section('content')
<form action="{{route('characters.store')}}" method="post" class="characterCreationForm">
    @csrf
    <label for="characterName">Nom du personnage:</label>
    <input type="text" name="characterName" id="characterName" placeholder="Nom du personnage" required>
    <label for="classe">Choisissez une classe:</label>
    <select name="classe" id="classe">
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="druide">Druide</option>
        <option value="assassin">Assassin</option>
        <option value="berserker">Berserker</option>
        <option value="archer">Archer</option>
    </select>
    <label for="for">Force:</label>
    <input type="number" name="for" id="for" value="{{rand(0,14)}}" readonly>
    <label for="mag">Magie:</label>
    <input type="number" name="mag" id="mag" value="{{rand(0,14)}}" readonly>
    <label for="int">Intelligence:</label> 
    <input type="number" name="int" id="int" value="{{rand(0,14)}}" readonly>
    <label for="agi">Agilité:</label>
    <input type="number" name="agi" id="agi" value="{{rand(0,14)}}" readonly>
    <label for="pvs">PVs:</label>
    <input type="number" name="pvs" id="pvs" value="{{rand(20,50)}}" readonly>
    <label for="description">Décrivez votre personnage:</label>
    <textarea name="description" id="description" cols="50" rows="5"></textarea>
    <button type="submit">Créer le personnage</button>
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
@endsection