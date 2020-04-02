<div class="row">
    <div class="col-12 desc">
        <h3 class="mt-3 mb-3 ml-3 mr-5"><i>{{$post->title}}</i></h3>
        <hr>
        <img src="{{$post->img_link ?? $post->img}}" class="img-fluid mt-3 mb-3 ml-3 mr-5" alt="Cinque Terre">
        <p class="mt-3 mb-3 ml-3 mr-5">{{$post->text}}</p>
        <p class="blockquote-footer mt-3 mb-3 ml-3 mr-5">{{$post->created_at}} | Автор:
            <cite title="Название источника">Ярмольник Л. </cite></p>
    </div>
</div>
<hr>
<div class="row mt-5">
    <div class="col-12">
        <h3>Добавить комментарий</h3>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <form action="{{route('addComment', ['id'=>$post->id])}}" method="post" class="form-group">
            @csrf
            <input type="text" name="comment" class="form-control">
            <input type="hidden" value="{{$post->id}}" name="post_id">
            <input type="submit" value="comment">
        </form>
    </div>
</div>

<hr>
<div class="row mt-5">
    <div class="col-12">
        <h3>Комментарии</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        @foreach($post->comment as $comment)
        <h4>{{$comment->author_name}} | {{$comment->created_at->diffForHumans()}}</h4>
        <h4>{{$comment->comment}}</h4>
        @endforeach
    </div>
</div>
