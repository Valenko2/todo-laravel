
@extends('components.header')
@section('content')
    <h2 class="text-center text-4xl mt-5 mb-5">Мои задачи</h2>
    @foreach($tasks as $task)
            <div class="border-2 border-slate-700  h-36 w-full p-3 rounded-xl relative mt-3 " id="{{$task->id}}">
                <h3 class="text-xl inline-block">{{$task->title}}</h3>
                <a href="{{route('task.edit', $task->id)}}" class="inline-block absolute top-4 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         class="w-6 h-6 text-slate-400 hover:text-slate-200 transition-colors">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                </a>
                <p class="text-slate-400 ">{{$task->desc}}</p>
                <p class="text-slate-400 opacity-60"> Категория:
                    <span class="text-blue-400">{{$task->category->title ?? 'Без категории' }}</span>
                 </p>
                 <div class="mt-4 ">
                     <button class="but" onclick="doneTask({{$task->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             class="w-7 h-7 text-green-500 bg-green-800 text-xl rounded hover:bg-green-600 transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </button>
                    <a href="{{route('task.delete', $task->id)}}" class="whitespace-nowrap inline-block" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             class="w-7 h-7 text-red-500 bg-red-800 text-xl rounded hover:bg-red-600 transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
            </div>

    <script>
        function doneTask(id) {
            let div = document.getElementById(id);

            if(div.classList.contains('bg-green-400'))
                div.classList.remove('bg-green-400', 'border-green-600')
            else
                div.classList.add('bg-green-400', 'border-green-600', 'transition-colors')
        }
    </script>
    @endforeach
@endsection

