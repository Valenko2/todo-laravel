@extends('components.header')
@section('content')
<main>
   <h2 class="text-5xl mt-10 text-center text-white m-5 ">Редактирование вопроса</h2>
    <div class="h-30 bg-slate-600 w-100  w-200 shadow-lg max-w-sm mx-auto flex items-center space-x-4 p-5">
        <form action="{{route('task.update', $task->id)}}" method="post" class="w-full">
            @csrf
            <input type="text" placeholder="Название" name="title"
                   class="task-create {{$errors->has('title') ? 'task-err' : 'placeholder-slate-500'}} "
                   value="{{$task->title}}">
            @error('title')
                <label class="text-red-400 text-sm">{{$message}}</label>
            @enderror
            <input type="text" placeholder="Описание" name="desc"
                   class="task-create {{$errors->has('desc') ? 'task-err' : 'placeholder-slate-500'}} "
                   value="{{$task->desc}}">
            @error('desc')
                <label class="text-red-400 text-sm">{{$message}}</label>
            @enderror
            <div class="mt-4">
                @error('category')
                <label class="err">{{$message}}</label>
                @enderror
                <label class=" text-slate-400 text-lg">Категория задачи</label>
                <select name="category">
                    <option value="0">Без категории</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button class="bg-blue-600 text-white px-10 py-2 text w-full rounded-xl mt-5 transition-colors hover:bg-blue-700 font-bold" type="submit">Изменить</button>

        </form>
    </div>

</main>
@endsection
