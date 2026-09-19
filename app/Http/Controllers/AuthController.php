<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email.tidak valid',
                'password.required' => 'password wajib diisi'
            ]
        );

        if (Auth::attemp($credentials)){
            $request->session()->regenerate();
            return redirect()->Intended('admin.dashboard')->width('success', 'Selamat Datang' . Auth::user()->name);
        }
    }
    //
}
