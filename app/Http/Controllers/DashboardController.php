<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InformasiLomba;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $informasiLombas = InformasiLomba::all();
        $categories = Category::all();

        $user = Auth::user();
        $mahasiswa = null;
        $guest = null;

        if ($user) {
            $guest = $user;

            if ($user->guest_type === 'Mahasiswa') {
                $mahasiswa = Mahasiswa::where('guest_id', $user->guest_id)->first();
            }
        }

        return view('users.home', compact('informasiLombas', 'categories', 'mahasiswa', 'guest'));
    
    }

    public function showLombas(){
        $informasiLombas = InformasiLomba::all();
        $categories = Category::all();
        return view('users.lomba', compact('informasiLombas', 'categories'));
    }

    
}
