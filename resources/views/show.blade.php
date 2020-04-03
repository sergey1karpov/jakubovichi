@extends('master')

@section('content')

<div class="row text-center">
    <div class="col-lg-12 text-center">
        <h3 class=" mb-3 ml-3 mr-5 text-center display-4" style="font-size: 40px">{{$post->title}}</h3>
        <hr>
        <img src="{{$post->img_link ?? $post->img}}" class="img-fluid" style="width: 900px;">
        <p class="mt-3 mb-3 ml-3 mr-5">{{$post->short_text}}</p>
        <p class="mt-3 mb-3 ml-3 mr-5">{{$post->text}}</p>
        <p class="blockquote-footer mt-3 mb-3 ml-3 mr-5">{{$post->created_at}} | Автор:
            <cite title="Название источника">Ярмольник Л. </cite></p>
    </div>
</div>

<div class="row mt-5 text-center">
    <div class="col-12 text-center">
        <h3 class=" mb-3   text-center display-4" style="font-size: 40px">Добавить комментарий</h3>
    </div>
</div>

<div class="row text-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 text-center">
        <form action="{{route('addComment', ['id'=>$post->id])}}" method="post" class="form-group">
            @csrf
            <textarea name="comment" cols="55" rows="5"></textarea><br>
            <input type="hidden" value="{{$post->id}}" name="post_id">
            <input type="submit" value="Добавить комментарий">
        </form>
    </div>
</div>

<hr>
<div class="row mt-5 text-center">
    <div class="col-12 text-center">
        <h3 class=" mb-3   text-center display-4" style="font-size: 30px">Комментарии:</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        @foreach($post->comment as $comment)
            <h3 class=" mb-3   text-center display-4" style="font-size: 20px">- "{{$comment->comment}}"</h3>
            <h3 class=" mb-3  text-center display-4" style="font-size: 15px">Прокоментировал {{$comment->author_name}} {{$comment->created_at->diffForHumans()}}
            <form action="{{route('deleteComment', ['id' => $comment->id, '$comment' =>$comment->user_id])}}" method="post" class="mt-2">
                @csrf @method('DELETE')
                <input type="submit" value="удалить">
            </form></h3>
            <h5 class=" mb-3 text-center">* * *</h5>
        @endforeach
    </div>
</div>

@endsection
