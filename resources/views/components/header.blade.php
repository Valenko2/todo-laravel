@extends('links.main')
@section('main')
    <div class=" flex items-baseline">
        <div class="bg-slate-600  w-64 text-white shadow-xl h-80 relative">
            <ul class="header">
                <li><a href="{{route('tasks')}}">Мои задачи</a></li>
                <li><a href="{{route('categories')}}">Категории</a></li>
                <li><a href="">Календарь задач</a></li>
            </ul>
            <div class="absolute bottom-3 left-0 w-full">
                <a href="{{route('task.add')}}" class="bg-green-500 px-10 py-1 block w-full hover:bg-green-400 transition-colors ">Добавить задачу</a>
                <h2 class="text-xl ml-2 mt-2 font-bold">{{Auth::user()->login }}</h2>
                <a href="{{route('exit')}}">выйти</a>
            </div>
        </div>
        <main class="bg-slate-600 w-full ml-3 min-h-dvh px-2 shadow-xl text-white">
            @yield('content')
        </main>
    </div>

@endsection
