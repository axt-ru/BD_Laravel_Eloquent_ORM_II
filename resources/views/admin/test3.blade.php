@extends('layouts.app')

@section('title')
    @parent Экспорт новостей
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">
                            @yield('title')
                        </h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.test3') }}">
                            @csrf
                            <div class="form-group">

                                <label for="newsCategory" class="col-form-label">Выберите категорию</label>
                                <select name="category_id" id="newsCategory" class="form-control">
                                    <option value="0">Все новости</option>
                                    @foreach($categories as $item)
                                        <option
                                            @if ($item['id'] == old('category')) selected @endif value="{{ $item['id'] }}">
                                            {{ $item['title'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formatData" id="exampleRadios1" value="json" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Формат JSON
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formatData" id="exampleRadios2" value="xlsx">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Формат XLSX
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="Экспортировать">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
