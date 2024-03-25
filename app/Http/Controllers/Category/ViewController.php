<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   ViewController extends Controller
{
    public function __invoke()
    {
        $categories = Category::where('user_id', Auth::user()->id )->get();
        $tasks = Category::withCount('tasks')->where('user_id', Auth::user()->id)->get();
        return view('Category.categories', compact('categories','tasks'));
    }
}
