<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }
}
