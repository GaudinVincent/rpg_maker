@extends('layouts.app')
@section('title')
Bienvenue sur RPG Manager
    
@endsection 
@section('content')
<div class="homePage">
    <h3><a href="{{route('users.index')}}">Voir les utilisateurs enregistrés</a></h3>
</div>

@endsection