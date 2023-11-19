<?php

namespace App\Http\Controllers;

use App\Models\InformasiLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiLombaController extends Controller
{
    public function index()
    {
        $informasiLombas = InformasiLomba::all();
        return view('admins.lomba.lomba', compact('informasiLombas'));
    }

    public function create()
    {
        return view('admins.lomba.lomba-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'organizer_name' => 'required|string',
            'reward' => 'required|string',
            'open_reg' => 'required|date',
            'close_reg' => 'required|date|after:open_reg',
            'term_and_condition' => 'required|string',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string',
        ]);

        $posterPath = $request->file('poster')->store('public/posterImage');

        InformasiLomba::create([
            'admin_id' => Auth::id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'organizer_name' => $request->input('organizer_name'),
            'open_reg' => $request->input('open_reg'),
            'close_reg' => $request->input('close_reg'),
            'reward' => $request->input('reward'),
            'term_and_condition' => $request->input('term_and_condition'),
            'contact' => $request->input('contact'),
            'poster' => $posterPath,
        ]);

        return redirect('/admin/lomba')->with('success', 'Berita berhasil ditambahkan.');
    }
}
