<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InformasiLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformasiLombaController extends Controller
{
    public function index()
    {
        $informasiLombas = InformasiLomba::all();
        return view('admins.lomba.lomba', compact('informasiLombas'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admins.lomba.lomba-create', compact('categories'));
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
            'term_and_condition' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string',
        ]);

        $posterPath = $request->file('poster')->store('public/posterImage');

        $informasiLomba =InformasiLomba::create([
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

        $categories = $request->input('categories');

        $informasiLomba->addCategories($categories);

        return redirect('/admin/lomba');
    }

    public function edit($id)
    {
        $informasiLomba = InformasiLomba::findOrFail($id);
        $categories = Category::all();
        return view('admins.lomba.lomba-update', compact('informasiLomba', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'organizer_name' => 'required|string',
            'reward' => 'required|string',
            'open_reg' => 'required|date',
            'close_reg' => 'required|date|after:open_reg',
            'term_and_condition' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string',
        ]);

        $informasiLomba = InformasiLomba::findOrFail($id);

        if ($request->hasFile('poster')) {
            Storage::disk('public')->delete($informasiLomba->poster);
        
            $filePath = $request->file('poster')->store('public/posterImage');
            $informasiLomba->poster = $filePath;
        }
        
        $informasiLomba->update([
            'admin_id' => Auth::id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'organizer_name' => $request->input('organizer_name'),
            'open_reg' => $request->input('open_reg'),
            'close_reg' => $request->input('close_reg'),
            'reward' => $request->input('reward'),
            'term_and_condition' => $request->input('term_and_condition'),
            'contact' => $request->input('contact'),
        ]);

        $categories = $request->input('categories');
        $informasiLomba->InformasiLombaCategory()->delete();
        $informasiLomba->addCategories($categories);

        return redirect('/admin/lomba');
    }


    public function destroy($id)
    {
        $informasiLomba = InformasiLomba::findOrFail($id);
        Storage::delete($informasiLomba->poster);
        $informasiLomba->delete();
        return redirect('/admin/lomba');
    }
}
