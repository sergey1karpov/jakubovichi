@extends('master')

@section('content')

<img src="{{asset('img/qwe.png')}}" class="img-fluid mt-3 mb-3 ml-3 mr-5" alt="Cinque Terre">

<div class="contact-form ">
    <div class="container ">
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h1 class="">Напишите нам</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Ваше имя" name="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="Почта" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Тема сообщения" name="">
                    </div>
                    <div class="form-group">
              <textarea class="form-control form-control-lg">

       </textarea>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
