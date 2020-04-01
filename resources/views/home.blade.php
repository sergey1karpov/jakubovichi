@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3 class="text-center">Add post</h3>
            <h5 class="text-center"><a href="{{route('home.create')}}">добавить новость</a></h5>

            <h3 class="text-center mt-3">Post list</h3>
            <div class="card">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                    <tbody>
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td><a href="{{route('home.edit', ['id' => $post->id])}}" class="btn btn-dark">Редактировать</a></td>

                        <td><form action="{{route('home.destroy', ['id' => $post->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form></td>

                    </tr>
                    </tbody>
                        @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
