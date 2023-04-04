@extends('layouts.app')
@section('title')
Définir un nouveau groupe
@endsection
@section('content')
    <form action="{{route('groups.store')}}" method="post" class="creationForm">
        @csrf
        <label for="name">Nom du groupe:</label>
        <input type="text" name="name" id="name" placeholder="Nom du groupe">
        <label for="capacity">Nombre de places:</label>
        <select name="capacity" id="capacity">
            <option value="4">4 personnages</option>
            <option value="6">6 personnages</option>
            <option value="8">8 personnages</option>
        </select>
        <label for="description">Description du groupe:</label>
        <textarea name="description" id="description" cols="50" rows="5" placeholder="Décrivez votre groupe en quelques mots"></textarea>
        <button type="submit">Valider</button>
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