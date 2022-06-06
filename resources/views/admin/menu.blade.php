<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.index') }}">Панель администратора ( <strong>Главная</strong> )</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.news.create') }}">Добавить новость</a>
</li>

{{--<li class="nav-item">--}}
{{--    <a class="nav-link" href="{{ route('admin.test1') }}">Выгрузить данные (json)</a>--}}
{{--</li>--}}

{{--<li class="nav-item">--}}
{{--    <a class="nav-link" href="{{ route('admin.test2') }}">Выгрузить картинку</a>--}}
{{--</li>--}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Выгрузить данные
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item {{ request()->routeIs('admin.test1') ? 'active' : '' }}" href="{{ route('admin.test1') }}">
            Выгрузить данные (json)
        </a>
        <a class="dropdown-item {{ request()->routeIs('admin.test2') ? 'active' : '' }}" href="{{ route('admin.test2') }}">
            Выгрузить картинку
        </a>
        <a class="dropdown-item {{ request()->routeIs('admin.test3') ? 'active' : '' }}" href="{{ route('admin.test3') }}">
            Выгрузить новости
        </a>
    </div>
</li>
