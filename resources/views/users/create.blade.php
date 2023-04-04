<!--Formulaire de création de compte !-->
@extends('layouts.app')
@section('title')
S'inscrire    
@endsection
@section('content')
<div class="creationForm">
    <form action="{{route('users.store')}}" method="post" class="mdfChar">
        @csrf
        <input type="text" name="lastname" id="lastname" placeholder="Nom de famille" required> 
        <input type="text" name="firstname" placeholder="Prénom" required>
        <input type="text" name="pseudo" id="pseudo" placeholder="Choisissez votre pseudo" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Mot de passe" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
        <button type="submit">Créer un compte</button>
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

</div>

@endsection