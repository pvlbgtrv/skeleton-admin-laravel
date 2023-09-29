<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only(['username', 'password']);
        $remember = $request->get('remember');

        if (Auth::attempt($data, $remember)) {
            flash('Вход успешно выполнен', 'success');
            return redirect()->intended(route('dashboard'));
        }
    }

    public function logout() {
        Auth::logout();
        flash('Выход успешно выполнен', 'success');
        return redirect()->route('auth.login');
    }
}
