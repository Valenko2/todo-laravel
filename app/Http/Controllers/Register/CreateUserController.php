<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class CreateUserController extends Controller
{
    public function __invoke()
    {

        request()->validate([
            'login' => ['required', 'string', 'min:3', 'max:40', 'unique:users'],
            'password' =>['required', 'string', 'min:5', 'confirmed'],
        ]);

        $user = User::create([
            'login' => request()->login,
            'password' => request()->password
        ]);
        Auth::login($user);
        return redirect(route('tasks'));
    }


}
