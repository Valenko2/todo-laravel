@extends('components.header')
@section('content')
<main>
   <h2 class="text-3xl mt-10">Tasks</h2>
    <div class="h-30 bg-slate-600 w-100">
        <form action="" method="post">
                <p>
                    <input type="text" placeholder="Название" >
                </p>
                <p>
                    <input type="text" placeholder="Описание">
                </p>
                <input type="submit" value="Создать">
        </form>
    </div>
</main>
@endsection
