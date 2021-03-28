<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <div class="menu">
                <a href="/">Accueil</a>
                <div id="navbarText">
                    <ul >
                        <li class="nav-item"><a class="nav-link" href="/list">Liste des personnages</a></li>
                        <li class="nav-item"><a class="nav-link" href="/addCharacter">Ajouter un nouveau personnage</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>