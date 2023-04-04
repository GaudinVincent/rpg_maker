<!--Liste de tous les utilisateurs!-->
@extends('layouts.app')
@section('title')
Liste des utilisateurs:    
@endsection
@section('content')
    @foreach ($allUsers as $user)
    <div class="allUsers">
        <p><b>Pseudo: </b>{{$user->pseudo}}</p>
        <p><b>Description: </b></p>
        <p><a href="{{route('users.show', ['user'=> $user->id])}}">Voir le profil</a></p>
    </div>
    @endforeach
@endsection