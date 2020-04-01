<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>ЯКубовичи</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  ">
    <a class="navbar-brand" href="{{route('index')}}">#ЯИЗМЕРЯЮВЯКУБОВИЧАХ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-">
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="{{route('about')}}">О Нас</a> </li>
            <li class="nav-item">
                <a class="nav-link " data-value="team" href="{{route('team')}}">Наша команда</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-value="contacys" href="{{route('contacts')}}">Контакты</a> </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('home.index') }}">
                        {{ __('Home') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

@yield('content')

<nav class="navbar fixed-bottom navbar-light br-light footer ">
    <ul class="navbar-nav ml-1 ">
        <li class="nav-item ">
            <a class="nav-link" data-value="about" href="about_us.html">О Нас</a> </li>
        <li class="nav-item ">
            <a class="nav-link " data-value="team" href="team.html">Наша команда</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " data-value="contacts" href="contacts.html">Контакты</a> </li>
    </ul>
    <form class="form-inline ">
        <h1 class="footer_k mr-1 ">
            © 2019 Все права защищены ОМОНОМ. <br>
            <img src="{{asset('img/1.png')}}" class="img-fluid" width="220">
        </h1>
    </form>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
