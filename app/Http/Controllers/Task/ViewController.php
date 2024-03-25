<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::where('user_id', Auth::user()->id )->get();
        return view('tasks', compact('tasks'));
    }
}
