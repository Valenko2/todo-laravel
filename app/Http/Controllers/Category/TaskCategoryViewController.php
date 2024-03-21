<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;

class TaskCategoryViewController extends Controller
{
    public function __invoke(Category $category)
    {
        $tasks = Task::where('category_id', $category->id)->get();
        return view('Category.taskCategory', compact('category','tasks'));
    }
}
