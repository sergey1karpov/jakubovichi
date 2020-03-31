@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12 desc">
        <h3 class="mt-3 mb-3 ml-3 mr-5"><i>Золотой стандарт величины</i></h3>
        <hr>
        <img src="{{asset('img/news1.jpg')}}" class="img-fluid mt-3 mb-3 ml-3 mr-5" alt="Cinque Terre">
        <p class="mt-3 mb-3 ml-3 mr-5">ЯКубовичи - это новая еденица измерения, пришедшая на
            замену стандартным сантиметрам, дециметрам и метрам. Эта величина была названа
            в честь известного на весь мир "Да ладно!" и "Что вы нам будите сегодня показывать?"
            Леонида Аркадьевича Якубовича. Официальная дата рождения велечины - 1 июля 2019 года.</p>
        <p class="mt-3 mb-3 ml-3 mr-5">1 ЯКубович или сокращенно ЯК, равен 1,68 м.</p>
        <p class="blockquote-footer mt-3 mb-3 ml-3 mr-5">21.13.2019 | Автор: <cite
                title="Название источника">Ярмольник Л. <abbr title="Хотя лучше не надо" class="initialism">Читать
                    дальше...</abbr></cite></p>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="{{asset('img/2.jpg')}}" class="img-fluid" alt="">
    </div>
</div>

@endsection


