<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks');
    }

    public function create()
    {
        request()->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required','string','min:5']
        ]);
        Task::create([
            'title'=> request()->title,
            'desc' => request()->desc,
            'hard' => 2
        ]);
       return redirect('/task');
    }
}
