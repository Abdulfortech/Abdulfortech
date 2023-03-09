<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    } 

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/admin/dashboard')->with('message', 'You are logged in!');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    public function registerForm()
    {
        return view('register');
    } 

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => 'required|email|unique:users',
            'password' => ['required', 'min:4'],
        ]);
        
        $credentials['password'] = bcrypt($credentials['password']);
        // dd($credentials);

        $user = User::create($credentials);
        return redirect('admin/login')->with('message','User created');
    }
    public function dashboard(Request $request)
    {
        return view('/adminDashboard');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login')->with('message','You have been logged out!');
    }
}
