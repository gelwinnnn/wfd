<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan model Account sudah benar
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function login_page()
    {
        // Reset status login pada sesi
        Session::put("loggedin", false);
        return view("login"); // Mengarahkan ke view login
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credential = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ],
        [
            'username.required'=>'username wajib diisi',
            'password.required'=>'password wajib diisi'
        ]    
        );

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = User::where('username', $request->username)->first();
            Session::put('role', $user->roles);

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    // Proses logout
    public function logout()
    {
        // Hapus semua data sesi
        Session::flush();
        return redirect(route('login')); // Mengarahkan ke halaman login setelah logout
    }
}
