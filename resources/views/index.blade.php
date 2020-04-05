@extends('master')

@section('content')

<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 text-center">
        @foreach($posts as $post)
            <h3 class=" mb-3 ml-3 mr-5 text-center display-4" style="font-size: 30px">{{$post->title}}</h3>
        <hr>
        <img src="{{$post->img_link ?? $post->img}}" class="img-fluid mt-3 mb-3 text-center" style="width: 800px;">
        <p class="mt-3 mb-3 ml-3 mr-5 text-center">{{$post->short_text}}</p>
        <p class="blockquote-footer mt-3 mb-3 ml-3 mr-5">{{$post->created_at->diffForHumans()}} | Автор:
            <cite title="Название источника">Ярмольник Л. | Комментариев: {{$post->comment->count()}} | </cite>
            <a href="{{route('showPost', ['id' => $post->id])}}">Читать новость про Леонида Аркадиевича</a>
        </p>
        @endforeach
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
        <img src="{{asset('img/2.jpg')}}" class="img-fluid text-center" style="width: 500px;">
        <img src="{{asset('img/2.jpg')}}" class="img-fluid text-center" style="width: 500px;">
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 text-center" style="margin-left: 25.9%;">
        {{ $posts->links() }}
    </div>
</div>

@endsection


