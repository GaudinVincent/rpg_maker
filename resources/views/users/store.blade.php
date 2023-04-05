<!--Confirmation de la création d'un compte utilisateur et récap de ses informations!-->
@extends('layouts.app')
@section('title')
Votre profil a bien été créé !
@endsection
@section('content')
<div class="profileCategory">
    <h2>Vos identifiants:</h2>
    <p><b>Nom d'utilisateur: </b>{{$userCreated["pseudo"]}}</p>
    <p><b>Email: </b>{{$userCreated["email"]}}</p>   
</div>
@endsection
