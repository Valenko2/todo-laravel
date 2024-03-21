<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {

        request()->validate([
            'title' => ['required', 'string', 'max:40'],
        ]);
        Category::create([
            'title'=> request()->title,
        ]);
        return redirect(route('categories'));
    }

}
