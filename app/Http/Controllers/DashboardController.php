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

        // Get all Mahasiswa records with their corresponding Guest data
        $mahasiswas = Mahasiswa::with('guest')->get();

        return view('users.home', compact('informasiLombas', 'categories', 'mahasiswas'));
    }

    public function showLombas(){
        $informasiLombas = InformasiLomba::all();
        $categories = Category::all();
        return view('users.lomba', compact('informasiLombas', 'categories'));
    }

    
}
