<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Requests\Frontend\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('frontend/auth/login');
    }

    public function doLogin(LoginRequest $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('admin/dashboard');

        } else {

            return redirect('login')->withErrors(['Email or password is not correct']);

        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
}
