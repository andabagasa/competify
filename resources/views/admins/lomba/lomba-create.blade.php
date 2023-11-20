@extends('admins.layouts.main', ['page' => 'dashboard-lomba-create'])

@section('title', 'Tambah Lomba')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Tambah Lomba</h1>
    <form action="/admin/lomba-create" method="post" class="flex flex-col gap-1 w-[480px] justify-start" enctype="multipart/form-data">
        @csrf
        <label for="title" class="label-input">Nama Lomba</label>
        <input type="text" name="title" id="title" class="input-field" placeholder="Masukkan nama lomba" >
        <label for="categories" class="label-input mt-3">Kategori</label>
        @foreach($categories as $category)
        <div class="flex items-center">
            <input type="checkbox" name="categories[]" id="category{{ $category->category_id }}" value="{{ $category->category_id }}">
            <label for="category{{ $category->category_id }}" class="ml-2">{{ $category->name }}</label>
        </div>
        @endforeach
        <label for="description" class="label-input mt-3">Deskripsi Lomba</label>
        <textarea name="description" id="description" placeholder="Masukkan deskripsi lomba" class="input-field h-60 resize-none" ></textarea>
        <label for="poster" class="label-input mt-3">Poster Lomba</label>
        <input type="file" name="poster" id="poster" class="input-field" >
        <label for="organizer_name" class="label-input mt-3">Pelaksana</label>
        <input type="text" name="organizer_name" id="organizer_name" class="input-field" placeholder="Masukkan nama pelaksana" >
        <label for="contact" class="label-input mt-3">Kontak</label>
        <textarea name="contact" id="contact" placeholder="Masukkan kontak pelaksana" class="input-field h-60 resize-none" ></textarea>
        <div class="w-full flex gap-4 mt-3">
            <div class="w-full">
                <label for="open_reg" class="label-input">Open Registration</label>
                <input type="date" name="open_reg" id="open_reg" class="w-full input-field" placeholder="Masukkan tanggal pembukaan" >
            </div>
            <div class="w-full">
                <label for="close_reg" class="label-input">Close Registration</label>
                <input type="date" name="close_reg" id="close_reg" class="w-full input-field" placeholder="Masukkan tanggal pembukaan" >
            </div>
        </div>
        <label for="term_and_condition" class="label-input mt-3">Syarat & Ketentuan</label>
        <input type="text" name="term_and_condition" id="term_and_condition" class="input-field" placeholder="Masukkan syarat & ketentuan" >
        <label for="reward" class="label-input mt-3">Reward</label>
        <textarea name="reward" id="reward" placeholder="Masukkan reward" class="input-field h-60 resize-none" ></textarea>
        <div class="w-full h-12 flex gap-4 mt-5">
            <a href="/admin/lomba" class="btn-secondary-normal w-full">Kembali</a>
            <button type="submit" class="btn-primary-normal w-full">Simpan Lomba</button>
        </div>
    </form>
</main>
@endsection
