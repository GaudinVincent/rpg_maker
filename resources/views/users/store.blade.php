@extends('layouts.app')
@section('title')
Votre profil a bien été créé !
@endsection
@section('content')
<h2>Vos identifiants:</h2>
<p><b>Nom d'utilisateur: </b>{{$userCreated["pseudo"]}}</p>
<p><b>Email: </b>{{$userCreated["email"]}}</p>   
@endsection