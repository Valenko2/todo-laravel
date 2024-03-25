<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {
        $categories = Category::where('user_id', Auth::user()->id )->get();
        return view('editTask', compact('task', 'categories'));
    }
}
