<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class ExitController extends Controller
{
    public function exit()
    {
        Auth::logout();

        return redirect(route('auth'));
    }


}
