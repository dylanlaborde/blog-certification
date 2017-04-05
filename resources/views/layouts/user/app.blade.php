<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/dropdown.css" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>

        <div id="app">
            <div class="ui huge borderless stackable blue inverted  menu">
              <div class="ui grid container">
                <a class="item" href="{{ url('/') }}">Acceuil</a>
                <a class="item">Article</a>
                <div class="right menu">
                    @if (Auth::guest())
                    <a class="item" href="{{ route('login') }}">Connexion</a>
                    <a class="item" href="{{ route('register') }}">Inscription</a>
                    @else
                    <div class="ui pointing dropdown item" id="dropdown">{{ Auth::user()->name }}<i class="dropdown icon"></i>
                        <div class="menu" id="user_dropdown">
                            <a class="item">Profil</a>
                            <a class="item">Modifier mon profil</a>
                            <a class="item" href="{{ route('logout') }}" id="logout">Déconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display none;">{{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <a class="item">Déconnexion</a>
                </div>
                @endif      
            </div>
        </div>
    </div>
    
    @yield('content')


    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.js"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
