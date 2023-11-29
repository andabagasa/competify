<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Guest;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{

    public function login(Request $request): RedirectResponse{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = DB::table('guests')->where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($user->guest_type == "Admin"){
                return redirect()->intended('/admin');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah, silahkan coba lagi.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function showRegisterForm()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:guests',
            'no_tlp' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'guest_type' => 'Mahasiswa',
        ];
        $guest = Guest::create($user);

        Mahasiswa::create([
            'guest_id' => $guest->guest_id,
            'no_tlp' => $request->no_tlp,
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
