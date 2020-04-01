@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12 desc">
        @foreach($posts as $post)
        <h3 class="mt-3 mb-3 ml-3 mr-5"><i>{{$post->title}}</i></h3>
        <hr>
        <img src="{{$post->img_link ?? $post->img}}" class="img-fluid mt-3 mb-3 ml-3 mr-5" alt="Cinque Terre">
        <p class="mt-3 mb-3 ml-3 mr-5">{{$post->text}}</p>
        <p class="blockquote-footer mt-3 mb-3 ml-3 mr-5">21.13.2019 | Автор: <cite
                title="Название источника">Ярмольник Л. <abbr title="Хотя лучше не надо" class="initialism">Читать
                    дальше...</abbr></cite></p>
        @endforeach
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="{{asset('img/2.jpg')}}" class="img-fluid" alt="">
    </div>
</div>

@endsection


