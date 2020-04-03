@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="display-4 text-center" style="font-size: 60px">Прекрасный конвертер ЯКубовичей</h1>
        <h1 class="display-4 text-center" style="font-size: 20.3px">Вы можете мгновенно перевести говно-метры в ЯКубовичи, с помощью нашего прекрасного конвертера</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form action="" method="post" style="width: 500px; margin: auto;">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Сколько метров?</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="num">
                <small id="emailHelp" class="form-text text-muted">Сюда вставляй своё число в метрах...</small>
            </div>
            <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
    </div>
</div>

<div class="row" style="margin-bottom: 90px;">
    <div class="col-lg-12">
        <h1 class="display-4 text-center" style="font-size: 60px">Итого: {{$res}} ЯК</h1>
    </div>
</div>

@endsection
