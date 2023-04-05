@extends('layouts.app')
@section('title')
Mon profil
@endsection
@section('content')
<div class="profileCategory">
    <h3 class="categoryName">Informations personnelles</h3>
    <p><b>Nom de famille: </b>{{$userProfile["lastname"]}}</p>
    <p><b>Prénom: </b>{{$userProfile["firstname"]}}</p>
    <p><b>Email: </b>{{$userProfile["email"]}}</p>
</div>
@endsection