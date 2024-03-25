<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __invoke()
    {
        return view('Register.auth');
    }


}
