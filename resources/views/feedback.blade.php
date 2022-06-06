@extends('layouts.app')

@section('title', 'Обратная связь')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <h2 style="text-align: center">Обратная связь</h2>
        <form method="GET" action="{{ route('feedback') }}">
            @csrf
            <div class="form-group">
                <label for="userName">Имя пользователя</label>
                <input type="text" name="name" id="userName" class="form-control" value="{{ old('title') }}">

                <label for="comment">Ваши комментарии по работе проекта</label>
                <textarea name="text" id="comment" class="form-control">{{ old('text') }}</textarea>
            </div>

            <div class="form-group">
                <input class="btn btn-outline-primary" type="submit" value="Отправить">
            </div>
        </form>

    </div>
@endsection
