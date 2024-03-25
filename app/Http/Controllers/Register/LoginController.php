<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __invoke()
    {

        request()->validate([
            'login' => ['required', 'string', 'min:3', 'max:40'],
            'password' =>['required', 'string', 'min:5'],
        ]);

        if (Auth::attempt(request()->only('login', 'password'))) {
            return redirect(route('tasks'));
        }
        return  back()->withErrors(['err' => 'Логин или пароль введены не верно']);

    }


}
