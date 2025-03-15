<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Halaman Register
    public function showRegisterForm()
    {
        return view('auth.register'); // Sesuai dengan folder yang benar
    }

    // Proses Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'member', // Default member
        ]);

        return redirect()->route('user.login')->with('success', 'Akun berhasil dibuat, silakan login.');
    }

    // Halaman Login
    public function showLoginForm()
    {
        return view('auth.login'); // Sesuai dengan folder yang benar
    }

    // Proses Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'member') {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Dashboard Member
    public function dashboard()
    {
        return view('user.dashboard');
    }

    // Dashboard Admin
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome')->with('success', 'Berhasil logout.');
    }
}