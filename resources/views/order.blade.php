@extends('layouts.app')

@section('title', 'Заказ')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <h2 style="text-align: center">Форма заказа</h2>
        <form method="POST" action="{{ route('admin.create') }}">
            @csrf
            <div class="form-group">
                <label for="nameCustomer">Имя заказчика</label>
                <input type="text" name="name" id="nameCustomer" class="form-control" value="{{ old('title') }}">

                <label for="phone">Номер телефона</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('title') }}">

                <label for="email">Имя заказчика</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('title') }}">

                <label for="aboutInform">Информации о том, что нужно получить</label>
                <textarea name="text" id="aboutInform" class="form-control">{{ old('text') }}</textarea>
            </div>

            <div class="form-group">
                <input class="btn btn-outline-primary" type="submit" value="Отправить">
            </div>
        </form>

    </div>
@endsection
