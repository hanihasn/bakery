<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->where('role', 'admin')->first();

        if ($user && password_verify($request->password, $user->password)) {
            session(['admin_logged_in' => true, 'admin_id' => $user->id]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->withErrors(['error' => 'Silakan login terlebih dahulu']);
        }

        return view('admin.dashboard');
    }

    public function logout()
    {
        Session::forget(['admin_logged_in', 'admin_id']);
        return redirect()->route('admin.login')->with('success', 'Berhasil logout');
    }
}