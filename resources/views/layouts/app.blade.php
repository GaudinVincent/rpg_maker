<!--Modèle de page principal avec une navbar différente en fonction du statut de l'utilisateur!-->
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
    <!--Utilisateur connecté!-->
    @auth
        <nav>
            <div class="mainNavbar">
                <p><a href="/home">Accueil</a></p>
                <p><a href="{{route('home.profile')}}">Mon profil</a></p>
                <p><a href="{{route('characters.index')}}">Mes personnages</a></p>
                <p><a href="{{route('groups.index')}}">Mes groupes</a></p>
                <p><a href="{{route('logout')}}">Se déconnecter &nbsp</a></p>
            </div>
        </nav>
    @endauth
    <!--Utilisateur non connecté!-->
    @guest
        <nav>
            <div class="mainNavbar">
                <p><a href="/home">Accueil</a></p>
                <p><a href="{{route('users.create')}}">S'inscrire</a></p>
                <p><a href="/login">Se connecter &nbsp</a></p>
            </div>
        </nav>
    @endguest
    <h1>@yield('title')</h1>
    @yield('content')
</body>
</html>