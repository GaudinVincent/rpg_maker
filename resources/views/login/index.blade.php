@extends('layouts.app')
@section('title')
Se connecter   
@endsection
@section('content')
<div class="creationForm">
    <form action="{{route('login.authenticate')}}" method="post" class="creationForm">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Mot de passe">
        <button type="submit">S'identifier</button>
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