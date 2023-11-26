<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function profile(){
        $user = Auth::user();
        if ($user && $user->guest_type === 'Mahasiswa') {
            $mahasiswa = Mahasiswa::where('guest_id', $user->guest_id)->first();

            return view('users.profile', ['guests' => $user, 'mahasiswa' => $mahasiswa]);
        } 
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $categories = Category::all();
        $guest = Auth::user();
        return view('users.profile-edit', compact('mahasiswa', 'guest', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string',
            'prodi' => 'required|string',
            'angkatan' => 'required|string',
            'description' => 'required|string',
            'no_tlp' => 'required|string',
            'acc_linkedin' => 'required|string',
            'acc_instagram' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Delete previous photo if exists
            if ($mahasiswa->photo) {
                Storage::delete($mahasiswa->photo);
            }

            // Store the new photo
            $filePath = $request->file('photo')->store('public/photoImage');
            $mahasiswa->photo = $filePath;
        }
        
        $mahasiswa->update([
            'nim' => $request->input('nim'),
            'prodi' => $request->input('prodi'),
            'angkatan' => $request->input('angkatan'),
            'description' => $request->input('description'),
            'no_tlp' => $request->input('no_tlp'),
            'acc_linkedin' => $request->input('acc_linkedin'),
            'acc_instagram' => $request->input('acc_instagram'),
        ]);

        $categories = $request->input('categories', []);
        $mahasiswa->MahasiswaCategory()->delete();
        $mahasiswa->addCategories($categories);
    
        $guest = Guest::findOrFail($mahasiswa->guest_id);
        $guest->update([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
        ]);
    
        return redirect('/profile');

    }
}
