<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class   ViewController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tasks = Category::withCount('tasks')->get();
        return view('Category.categories', compact('categories','tasks'));
    }
}
