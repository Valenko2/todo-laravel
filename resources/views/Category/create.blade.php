@extends('links.main')
@section('main')
<main>
   <h2 class="text-5xl mt-10 text-center text-white m-5 ">Создание категории</h2>
    <div class="h-30 bg-slate-600 w-100  w-200 shadow-lg max-w-sm mx-auto flex items-center space-x-4 p-5">
        <form action="{{route('category.create')}}" method="post" class="w-full">
            @csrf
            <input type="text" placeholder="Название" name="title"
                   class="task-create {{$errors->has('title') ? 'task-err' : 'placeholder-slate-500'}}"
                   value="{{old(('title'))}}">
            @error('title')
                <label class="text-red-400 text-sm">{{$message}}</label>
            @enderror

            <button class="bg-blue-600 text-white px-10 py-2 text w-full rounded-xl mt-5 transition-colors hover:bg-blue-700 font-bold" type="submit">Создать</button>

        </form>
    </div>

</main>
@endsection
