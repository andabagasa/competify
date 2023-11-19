@extends('admins.layouts.main', ['page' => 'dashboard-lomba-create'])

@section('title', 'Tambah Lomba')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Update Lomba</h1>
    <form action="" method="post" class="flex flex-col gap-1 w-[480px] justify-start">
        @csrf
        <label for="" class="label-input">Nama Lomba</label>
        <input type="text" name="" id="" class="input-field" placeholder="Masukkan nama lomba" required>
        <label for="" class="label-input mt-3">Kategori</label>
        <select name="" id="" class="input-field" required>
            <option value="">UI/UX</option>
            <option value="">Business Case</option>
        </select>
        <label for="" class="label-input mt-3">Deskripsi Lomba</label>
        <textarea name="" id="" placeholder="Masukkan deskripsi lomba" class="input-field h-60 resize-none" required></textarea>
        <label for="" class="label-input mt-3">Poster Lomba</label>
        <input type="file" name="" id="" class="input-field" required>
        <label for="" class="label-input mt-3">Pelaksana</label>
        <input type="text" name="" id="" class="input-field" placeholder="Masukkan nama pelaksana" required>
        <label for="" class="label-input mt-3">Kontak</label>
        <textarea name="" id="" placeholder="Masukkan kontak pelaksana" class="input-field h-60 resize-none" required></textarea>
        <div class="w-full flex gap-4 mt-3">
            <div class="w-full">
                <label for="" class="label-input">Open Registration</label>
                <input type="date" name="" id="" class="w-full input-field" placeholder="Masukkan tanggal pembukaan" required>
            </div>
            <div class="w-full">
                <label for="" class="label-input">Close Registration</label>
                <input type="date" name="" id="" class="w-full input-field" placeholder="Masukkan tanggal pembukaan" required>
            </div>
        </div>
        <label for="" class="label-input mt-3">Syarat & Ketentuan</label>
        <input type="url" name="" id="" class="input-field" placeholder="Masukkan syarat & ketentuan" required>
        <label for="" class="label-input mt-3">Reward</label>
        <textarea name="" id="" placeholder="Masukkan reward" class="input-field h-60 resize-none" required></textarea>
        <div class="w-full h-12 flex gap-4 mt-5">
            <a href="/admin/lomba" class="btn-secondary-normal w-full">Kembali</a>
            <button type="submit" class="btn-primary-normal w-full">Simpan Lomba</button>
        </div>
    </form>
</main>
@endsection
