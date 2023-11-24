<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function profile(){
        $user = Auth::user();
        if ($user && $user->guest_type === 'Mahasiswa') {
            $mahasiswa = Mahasiswa::where('guest_id', $user->guest_id)->first();

            return view('users.profile', ['guests' => $user, 'mahasiswa' => $mahasiswa]);
        } 
    }
}
