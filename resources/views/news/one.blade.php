@extends('layouts.app')

@section('title', 'Новость')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($news)
                            <h2>{{ $news->title}}</h2>
{{--                            <img src="{{ Storage::url('default.jpg') }}" alt="">--}}
                            <div class="card-img"
                                 style="background-image: url({{ $news->image ?? asset('storage/default.jpg') }})"></div>
                            @if (!$news->isPrivate)
                                <br>
                                <p>{{ $news->text}}</p>
                            @else
                                Зарегистрируйтесь для просмотра
                            @endif
                        @else
                            Нет новости с таким id
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
