<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {

        request()->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required','string','min:5'],
            'category' => ['required']
        ]);
        $data = [
            'title'=> request()->title,
            'desc' => request()->desc,
            'hard' => 2
        ];
        if(request()->category != 0)  $data['category_id'] = request()->category;

        Task::create($data);
        return redirect(route('tasks'));
    }

}
