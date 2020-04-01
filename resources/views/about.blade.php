@extends('master')

@section('content')

<div class="row">

    <div class="col-lg-12">
        <h1 class="text6 text-center display-2">Примеры велечины</h1>
        <hr>
    </div>
    <div class="col-lg-12 ">
        <p class="ml-3">Леонид Аркадьевич воистинну легендарная личность.
            Его вклад к культуру нашей страны просто безграничен.
            Каждую пятницу, в 8 вечера, вся страна собирается у теливизора, что бы воочию увидеть как крутится
            барабан.
            Как три тройки игроков в безжалостном интелектуальном бою, сражаются за стиральные машины, холодильники,
            утюги, а некоторые счастливчики получают возможность увести домой другие ценные призы, такие как
            ананасы, тыквы, одному даже чеснок как то выпал.</p>
        <p class="ml-3">Передача Поле Чудес стартовала на голубых экранах российского телевидения в далеком 1990
            году,
            во времена лихих 90-х, подвальных качалок, сисикеч и алкаша Ельцина.
            Сначала передачу вел Владислав Листьев, но видимо, кому то в подарок достался бракованный утюг, и
            Владислава уволили. И наконец то, в 1991 году пришел он, Леонид Аркадьевич Якубович, и по
            сей день ведет эту передачу.</p>
        <p class="ml-3">В 2021 году будет уже 30 лет, как крутится барабан, и в честь этого события и были придуманы
            ЯКубовичи.</p>
        <hr>
    </div>

    <div class="col-lg-6 content2_blok">
        <h2 class="content2__text text-center text8 mb-5 display-4">Эйфелева Башня</h2>
        <img src="{{asset('img/2-2.jpg')}}" width="500" class="mx-auto d-block rounded">
        <p class="text7 text-center mt-5 ml-5 mr-5">Высота знаменитой на весь мир Эйфелевой башни составляет 178,5
            ЯКубовичей. Очень высокую башню там построили.</p>
    </div>
    <div class="col-lg-6 content2_blok">
        <h2 class="content2__text text-center text8 mb-5 display-4">Титаник</h2>
        <img src="{{asset('img/3-3.jpg')}}" width="500" class="mx-auto d-block rounded">
        <p class="text7 text-center mt-5 ml-5 mr-5">Длинна Титаника равна 160 ЯКубовичам, а глубина на которой он
            лежит
            составляет 2232 ЯКубовичей. Внушительно, не правда ли?</p>
    </div>
    <div class="col-lg-6 content2_blok">
        <h2 class="content2__text text-center text8 mb-5 display-4">Марианская впадина</h2>
        <img src="{{asset('img/4-4.jpg')}}" width="500" class="mx-auto d-block rounded">
        <p class="text7 text-center mt-5 ml-5 mr-5">Глубина самой известной в мире впадины составляет 6544
            ЯКубовича. Не
            может быть!</p>
    </div>
    <div class="col-lg-6 content2_blok">
        <h2 class="content2__text text-center text8 mb-5 display-4">Эверест</h2>
        <img src="{{asset('img/5-5.jpg')}}" width="500" class="mx-auto d-block rounded">
        <p class="text7 text-center mt-5 ml-5 mr-5">Высота самой высокой горы в мире составляет 5266,5 ЯКубовичей.
            Это
            просто не вероятно!</p>
    </div>
</div>

@endsection
