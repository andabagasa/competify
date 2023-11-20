<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admins.kategori.kategori', compact('categories'));
    }

    public function create()
    {
        return view('admins.kategori.kategori-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect('/admin/kategori');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.kategori.kategori-update', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $category = Category::findOrFail($id);

        
        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect('/admin/kategori');

    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/admin/kategori');
    }
}
