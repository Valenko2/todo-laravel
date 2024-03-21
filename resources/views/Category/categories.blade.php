<?php $count = 0 ?>
@extends('components.header')
@section('content')
    <h2 class="mt-5 text-4xl text-center">Категории задач</h2>
    <div class="mb-20">
        @foreach($categories as $category)
            <div class="category">
                <h3>{{$category->title}}</h3>
                <a href="{{route('category.delete', $category->id)}}" class="inline-block absolute top-3 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         class="w-6 h-6 text-red-500 opacity-60 hover:opacity-100 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </a>
                <p>Количество задач: <span class="text-blue-400">{{$tasks[$count]->tasks_count}}</span></p>
                <a href="{{route('tasks.category', $category->id)}}" class=" text-blue-400 hover:text-blue-200 block hover:translate-y-0.5 transition-all">
                    Посмотреть все задачи<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                              class="w-5 h-5 inline-block ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                    </svg>
                </a>

            </div>
            <?php $count++ ?>
        @endforeach

    </div>

    <a href="{{route('category.add')}}" class="bg-blue-500 px-2 py-2 rounded  hover:opacity-90 transition-all">Добавить новую категорию</a>

@endsection
