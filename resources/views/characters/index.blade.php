@extends('layouts.app')
@section('title')
    Mes personnages
@endsection
@section('content')
<div class="profileCategory">
    @foreach ($myCharacters as $character)
    <p><a href="{{route('characters.show', ['character' => $character->id])}}">{{$character->characterName}}</a></p>   
    @endforeach
    <button><a href="{{route('characters.create')}}">Créer un personnage</a></button>
</div>
@endsection