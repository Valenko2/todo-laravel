@extends('links.main')
@section('main')
    <div class=" flex items-baseline">
        <div class="bg-slate-600  w-64 text-white shadow-xl h-80 relative">
            <ul class="header">
                <li><a href="#">Мои задачи</a></li>
                <li><a href="">Категории</a></li>
                <li><a href="">Календарь заданий</a></li>
            </ul>
            <div class="absolute bottom-3 left-2">
                <h2 class="text-xl">Vladislav</h2>
            </div>
        </div>
        <main class="bg-slate-600 w-full ml-3 min-h-dvh px-2 shadow-xl text-white">
            @yield('content')
        </main>
    </div>

@endsection
