@extends('master')

@section('content')

    <form action="{{route('home.store')}}" method="POST" style="width: 500px; margin: 30%" class="mt-3 text-center" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            <small id="emailHelp" class="form-text text-muted">Сюда вставляй заголовок новости</small>
        </div>
        <div class="form-group">

            <input type="file" name="img">
            <small id="emailHelp" class="form-text text-muted">Сюда загружай картинку, но лучше не загружай</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Img link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="img_link">
            <small id="emailHelp" class="form-text text-muted">Сюда вставляй ссылку на картинку</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Short text</label>
            <textarea name="short_text" class="form-control"></textarea>
            <small id="emailHelp" class="form-text text-muted">Описание для главной страницы 255 символов</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Full text</label>
            <textarea name="text" class="form-control"></textarea>
            <small id="emailHelp" class="form-text text-muted">Весь бред своего воспаленного мозга пиши здесь</small>
        </div>
        <button type="submit" class="btn btn-primary">Сектор приз</button>
    </form>

@endsection
