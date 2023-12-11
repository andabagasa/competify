@extends('users.layouts.main', ['page' => 'profile-edit'])

@section('title', 'Edit Profile')

@section('content')
<main class="container mx-auto">
    <a href="/profile" class="w-fit btn-secondary-small flex gap-1 items-center absolute top-24">
        <x-phosphor-caret-left class="w-5 h-5"/>
        <p>Kembali</p>
    </a>
    <form action="{{ route('profile.update', ['id' => $mahasiswa->mahasiswa_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col justify-center items-center gap-12 pt-6 pb-20">
            <h1 class="text-4xl font-bold">Edit Profil</h1>
            <div class="flex flex-col gap-6 justify-center items-center">
                @if ($mahasiswa->photo == null)
                <span class="p-[42px] rounded-full bg-primary-100 text-primary-300">
                    <x-phosphor-user-circle class="w-24 h-24"/>
                </span>
                @else
                <img src="{{ Storage::url($mahasiswa->photo) }}" alt="" class="object-cover w-[180px] h-[180px] rounded-full">
                @endif
                <input type="file" name="photo" id="photo">
            </div>
            <div class="flex gap-6 w-full">
                <div class="w-1/2 p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-1">
                    <h2 class="text-2xl font-bold">Data Diri</h2>
                    <label for="name" class="label-input mt-5">Nama</label>
                    <input type="text" name="nama" id="nama" class="input-field" placeholder="Masukkan nama lengkap" value="{{ $guest->name }}">
                    <label for="nim" class="label-input mt-3">NIM</label>
                    <input type="text" name="nim" id="nim" class="input-field" placeholder="Masukkan nim" value="{{ $mahasiswa->nim }}">
                    <label for="email" class="label-input mt-3">Email</label>
                    <input type="text" name="email" id="email" class="input-field" placeholder="Masukkan email" value="{{ $guest->email }}">
                    <div class="w-full flex gap-4 mt-3">
                        <div class="w-full flex flex-col gap-1">
                            <label for="prodi" class="label-input">Program Studi</label>
                            <input type="text" name="prodi" id="prodi" class="input-field" placeholder="Masukkan program studi" value="{{ $mahasiswa->prodi }}">
                        </div>
                        <div class="w-full flex flex-col gap-1">
                            <label for="angkatan" class="label-input">Angkatan</label>
                            <input type="text" name="angkatan" id="angkatan" class="input-field" placeholder="Masukkan angkatan" value="{{ $mahasiswa->angkatan }}">
                        </div>
                    </div>
                    <label for="description" class="label-input mt-3">Deskripsi diri</label>
                    <textarea name="description" id="description" class="input-field resize-none h-60" placeholder="Masukkan deskripsi diri">{{ $mahasiswa->description }}</textarea>
                </div>
                <div class="w-1/2 flex flex-col gap-6">
                    <div class="p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-4">
                        <h2 class="text-2xl font-bold">Pilih Minat</h2>
                        <div class="w-full flex flex-wrap gap-4">
                            @foreach ($categories as $category)
                            <div class="flex gap-1">
                                <input type="checkbox" name="categories[]" id="category{{ $category->category_id }}" value="{{ $category->category_id }}" @if(in_array($category->category_id, $mahasiswa->MahasiswaCategory->pluck('category_id')->toArray())) checked @endif>
                                <label for="categories[]">{{ $category->name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-1">
                        <h2 class="text-2xl font-bold">Kontak</h2>
                        <label for="no_tlp" class="label-input mt-5">Nomor Whatsapp</label>
                        <input type="text" name="no_tlp" id="no_tlp" class="input-field" placeholder="Masukkan nomor whatsapp" value="{{ $mahasiswa->no_tlp }}">
                        <label for="acc_linkedin" class="label-input mt-3">LinkedIn (Link)</label>
                        <input type="text" name="acc_linkedin" id="acc_linkedin" class="input-field" placeholder="Masukkan akun LinkedIn dalam bentuk link" value="{{ $mahasiswa->acc_linkedin }}">
                        <label for="acc_instagram" class="label-input mt-3">Instagram (Link)</label>
                        <input type="text" name="acc_instagram" id="acc_instagram" class="input-field" placeholder="Masukkan akun Instagram dalam bentuk link" value="{{ $mahasiswa->acc_instagram }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-primary-normal w-full">Simpan Perubahan</button>
        </div>
    </form>
</main>
@endsection
