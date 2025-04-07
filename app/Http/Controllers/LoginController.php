<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginBackend()
    {
        return view('backend.v_login.login', [
<<<<<<< HEAD
        'judul' => 'Login',
=======
            'judul' => 'Login',
>>>>>>> 565bb27 (First commit)
        ]);
    }
    public function authenticateBackend(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
<<<<<<< HEAD
        ], [
            'email.required' => 'Bidang isian email wajib diisi.',
            'email.email' => 'Isian email harus berupa alamat surel yang valid.',
            'password.required' => 'Bidang isian password wajib diisi.',
        ]);
        if (Auth::attempt($credentials)) {
        if (Auth::user()->status == 0) {
        Auth::logout();
        return back()->with('error', 'User belum aktif');
        }
        $request->session()->regenerate();
        return redirect()->intended(route('backend.beranda'));
        }
        return back()->with('error', 'Login Gagal');
    }
        public function logoutBackend()
        {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect(route('backend.login'));
        }
=======
        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                return back()->with('error', 'User belum aktif');
            }
            $request->session()->regenerate();
            return redirect()->intended(route('backend.beranda'));
        }
        return back()->with('error', 'Login Gagal');
    }
    public function logoutBackend()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('backend.login'));
    }
>>>>>>> 565bb27 (First commit)
}
