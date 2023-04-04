<!--Modèle de page principal avec une navbar différente en fonction du statut de l'utilisateur!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Moon+Dance&family=Noto+Sans+Adlam+Unjoined:wght@500&family=Poppins:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <title>RPG Manager</title>
</head>
<body>
    <!--Utilisateur connecté!-->
    @auth
        <nav>
            <div class="mainNavbar">
                <div class="mainLogo">
                    <H1>RPG MANAGER</H1>
                </div>
                <div class="navLinks">
                    <p><a href="/home">Accueil</a></p>
                    <p><a href="{{route('home.profile')}}">Mon profil</a></p>
                    <p><a href="{{route('characters.index')}}">Mes personnages</a></p>
                    <p><a href="{{route('groups.index')}}">Mes groupes</a></p>
                    <p><a href="{{route('logout')}}">Se déconnecter &nbsp</a></p>
                </div>
                
            </div>
        </nav>
    @endauth
    <!--Utilisateur non connecté!-->
    @guest
        <nav>
            <div class="mainNavbar">
                <div class="mainLogo">
                    <H1>RPG MANAGER</H1>
                </div>
                <div class="navLinks">
                    <p><a href="/home">Accueil</a></p>
                    <p><a href="{{route('users.create')}}">S'inscrire</a></p>
                    <p><a href="/login">Se connecter &nbsp</a></p>
                </div>
            </div>
        </nav>
    @endguest
    <h1 class="mainBanner">@yield('title')</h1>
    @yield('content')
</body>
</html>