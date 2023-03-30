<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>RPG Manager</title>
</head>
<body>
    @auth
        <nav>
            <div>
                <p><a href="/home">Accueil</a></p>
                <p><a href="">Mon profil</a></p>
                <p><a href="">Mes groupes</a></p>
                <p><a href="">Se déconnecter</a></p>
            </div>
        </nav>
    @endauth
    @guest
        <nav>
            <div>
                <p><a href="/home">Accueil</a></p>
                <p><a href="{{route('users.create')}}">S'inscrire</a></p>
                <p><a href="/login">Se connecter</a></p>
            </div>
        </nav>
    @endguest
    <h1>@yield('title')</h1>
    @yield('content')
</body>
</html>