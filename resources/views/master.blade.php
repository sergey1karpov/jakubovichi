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
<div class="container"></div>
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
                    <a class="nav-link " data-value="convert" href="{{route('calculate')}}">Конвертер</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contacys" href="{{route('contacts')}}">Контакты</a> </li>
            </ul>
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
        </div>
    </nav>
</div>

<div class="container-fluid">
    <div class="col mt-5">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    @yield('content')
</div>

<div class="">
    <div class="bottom section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-4">
                    <div class="copyright">
                        <h3 class="display-4" style="font-size: 17px">Вы можете сделать Леониду Аркадиевичу и нам очень приятно...
                            Нет, это не то о чем вы подумали. Достаточно всего лишь подписаться на наши соц. сети и
                        вы будите в курсе всех новостей.</h3>
                        <div class="mt-3">
                            <a href="#"><img src="{{asset('img/vk.jpg')}}" class="img-fluid" width="43"></a>
                            <a href="#"><img src="{{asset('img/fb.jpg')}}" class="img-fluid" width="43"></a>
                            <a href="#"><img src="{{asset('img/inst.jpg')}}" class="img-fluid" width="43"></a>
                            <a href="#"><img src="{{asset('img/teleg.jpg')}}" class="img-fluid" width="43"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                    <div class="copyright">
                        <h3 class="display-4" style="font-size: 16px">Все права защищенны ОМОНОМ</h3>
                        <p><img src="{{asset('img/1.png')}}" class="img-fluid" width="235"></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
