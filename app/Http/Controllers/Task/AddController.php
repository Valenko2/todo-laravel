<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function __invoke()
    {
        return view('createTask');
    }


}
