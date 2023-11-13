<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Guest;

class GuestController extends Controller
{

    public function login(Request $request): RedirectResponse{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validated();

        if ($validated['password'] !== $validated['password_confirmation']) {
            return back()->withErrors([
                'password' => 'The password confirmation does not match.',
            ])->onlyInput('password');
        }

        $validated['password'] = Hash::make($validated['password']);

        $user = Guest::create($validated);

        Auth::login($user);

        return redirect()->intended('home');
    }
}
