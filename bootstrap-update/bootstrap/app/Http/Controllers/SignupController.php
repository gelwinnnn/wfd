<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class SignupController extends Controller
{
    // Menampilkan halaman sign up
    public function signup_page()
    {
        // Reset status login pada sesi
        Session::put("loggedin", false);
        return view("signup"); // Mengarahkan ke view login
    }

    // Proses sign up
    public function signup(Request $request)
    {
        // Validasi input
        $newUser = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'roles' => 'required'
            ]
        );
        //Cek apakah username dan password sesuai dengan yang ada di database
        $account = User::where('username', $request->input('username'))->first();

        // Jika tidak ada akun yang ditemukan atau password tidak sesuai
        if ($account) {
            return back()->with('error', 'Username has already exist');
        }

        $user = User::create([
            'username' => $newUser['username'],
            'password' => Hash::make($newUser['password']),
            'roles' => $newUser['roles'],
        ]);
        
        // Arahkan ke dashboard
        return redirect('/');
    }
}
