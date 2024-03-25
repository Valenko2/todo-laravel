<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function __invoke()
    {
        $categories = Category::where('user_id', Auth::user()->id )->get();
        return view('createTask', compact('categories'));
    }


}
