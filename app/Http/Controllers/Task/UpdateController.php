<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Task $task)
    {
        request()->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required','string','min:5'],
            'category' => ['required']
        ]);
        $data = [
            'title'=> request()->title,
            'desc' => request()->desc,
        ];

        if(request()->category != 0)  $data['category_id'] = request()->category;

        $task->update($data);
        return redirect('/');
    }


}
