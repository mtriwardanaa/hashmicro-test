<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\LoginPerform;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('user::auth.signin');
    }

    public function perform(LoginPerform $request)
    {
        $post = $request->except('_token');

        $credential = [
            'username' => $post['username'],
            'password' => $post['password'],
        ];

        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors('Username atau Password salah')->withInput();
    }

    public function username()
    {
        return 'username';
    }
}
