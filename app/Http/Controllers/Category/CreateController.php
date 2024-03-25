<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {

        request()->validate([
            'title' => ['required', 'string', 'max:40'],
        ]);
        Category::create([
            'title'=> request()->title,
            'user_id' => Auth::user()->id,
        ]);
        return redirect(route('categories'));
    }

}
