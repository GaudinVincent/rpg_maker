@extends('layouts.app')
@section('title')
S'inscrire    
@endsection
@section('content')
<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="lastname" id="lastname" placeholder="Nom de famille" required> 
    <input type="text" name="firstname" placeholder="Prénom" required>
    <input type="text" name="pseudo" id="pseudo" placeholder="Choisissez votre pseudo" required>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Mot de passe" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
    <button type="submit">Créer un compte</button>
</form>
@endsection