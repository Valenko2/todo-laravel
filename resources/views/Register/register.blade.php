@extends('links.main')

@section('main')
    <h2 class="block text-white text-5xl text-center mb-5">Регистрация</h2>
    <div class="h-96 bg-slate-600 w-1/3  shadow-lg  mx-auto flex items-center px-10">
        <form class="w-full" action="{{route('create.register')}}" method="post">
            @csrf
            <div class="input-reg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <label class="text-xl">Логин</label>
                <input class="{{$errors->has('login') ? 'err' : 'placeholder-slate-500'}}"
                       type="text" name="login" value="{{old(('login'))}} "
                >
                @error('login')
                    <label class="text-red-500">{{$message}}</label>
                @enderror
            </div>
            <div class="input-reg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
                <label class="text-xl">Пароль</label>
                <input
                    class="{{$errors->has('password') ? 'err' : 'placeholder-slate-500'}}"
                    type="password" name="password" value="{{old(('password'))}}"
                >
                @error('password')
                <label class="text-red-500">{{$message}}</label>
                @enderror
            </div>
            <div class="input-reg ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <label class="text-xl">Повторный пароль</label>
                <input
                    class="{{$errors->has('password_confirmation') ? 'err' : 'placeholder-slate-500'}}"
                    type="password" name="password_confirmation" value="{{old(('password_confirmation'))}}"
                >
                @error('password_confirmation')
                <label class="text-red-500">{{$message}}</label>
                @enderror
            </div>
            <button class="bg-blue-600 text-white px-10 py-2 text w-full rounded-xl mt-3 transition-colors hover:bg-blue-700 font-bold " type="submit">Создать аккаунт </button>
        </form>
    </div>
@endsection
