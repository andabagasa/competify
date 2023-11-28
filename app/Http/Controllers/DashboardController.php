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

        $mahasiswas = Mahasiswa::with('guest')->get();

        return view('users.home', compact('informasiLombas', 'categories', 'mahasiswas'));
    }

    public function showLombas(Request $request)
    {
        $query = $request->input('query');
        $selectedCategories = $request->input('categories');
    
        $categories = Category::all();
        $informasiLombas = InformasiLomba::with('InformasiLombaCategory.Category')
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where(function ($subQuery) use ($query) {
                    $subQuery->where('title', 'LIKE', '%' . $query . '%')
                             ->orWhere('organizer_name', 'LIKE', '%' . $query . '%');
                });
            })
            ->when($selectedCategories, function ($queryBuilder) use ($selectedCategories) {
                $queryBuilder->whereHas('InformasiLombaCategory', function ($subQuery) use ($selectedCategories) {
                    $subQuery->whereIn('category_id', $selectedCategories);
                });
            })
            ->get();
    
        return view('users.lomba', compact('informasiLombas', 'categories'));
    }

    public function showPartners(Request $request)
    {
        $query = $request->input('query');
        $selectedCategories = $request->input('categories');
    
        $categories = Category::all();
        $mahasiswas = Mahasiswa::with('MahasiswaCategory.Category')
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where(function ($subQuery) use ($query) {
                    $subQuery->whereHas('guest', function ($guestQuery) use ($query) {
                        $guestQuery->where('name', 'LIKE', '%' . $query . '%');
                    })
                    ->orWhere('prodi', 'LIKE', '%' . $query . '%');
                });
            })
            ->when($selectedCategories, function ($queryBuilder) use ($selectedCategories) {
                $queryBuilder->whereHas('MahasiswaCategory', function ($subQuery) use ($selectedCategories) {
                    $subQuery->whereIn('category_id', $selectedCategories);
                });
            })
            ->get();
    
        return view('users.partner', compact('mahasiswas', 'categories'));
    }


    
}
