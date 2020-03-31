@extends('master')

@section('content')

<div class="row">
    <div class="row text-center ml-5 mr-5">
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Леонид, наш Лидер</h3>
            <p class="text2 lead">"Для меня это большая честь, что мной теперь меряют" © Якубович Л.А. </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava1.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Эксперимент №5</h3>
            <p class="text2 lead">Клон Леонида Аркадьевича с зоны 51, созданный американскими спец службами.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava2.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Александр, местный дурачек</h3>
            <p class="text2 lead">Этот парень постоянно ошивался рядом с нашим офисом. Решили взять его в команду.</p>
        </div>
    </div>
    <div class="row text-center ml-5 mr-5">
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava3.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Кама, идейный вдохновитель</h3>
            <p class="text2 lead">"Санциметры это игрушка дьявола ежжи" © Кама Пуля </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava4.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Андрей и Стас, front-end разработчики</h3>
            <p class="text2 lead">Прошли обучение в нашей компании, сейчас работают на постоянной основе.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{asset('img/ava5.jpg')}}" width="250" class="rounded-circle">
            <h3 class="text2 lead zag blok5_1">Представилась Анной, убощица.</h3>
            <p class="text2 lead">Наводит порядок в помещеннии, полы моет, стекла, не много не адекватная.</p>
        </div>
    </div>
</div>

@endsection

