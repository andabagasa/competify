@extends('admins.layouts.main', ['page' => 'dashboard-lomba-create'])

@section('title', 'Tambah Lomba')

@section('content')
<div>
    <h1>Tambah Lomba</h1>
    <form action="/admin/lomba-create" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
        @csrf
        <label for="title" class="label-input">Nama</label>
        <input type="text" name="title" id="title" placeholder="Masukkan nama anda" class="input-field">
        <label for="description" class="label-input mt-3">Deskripsi</label>
        <input type="text" name="description" id="description" placeholder="Masukkan email anda" class="input-field">
        <label for="organizer_name" class="label-input mt-3">Penyelenggara</label>
        <input type="text" name="organizer_name" id="organizer_name" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="open_reg" class="label-input mt-3">Open Registrasi</label>
        <input type="date" name="open_reg" id="open_reg" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="close_reg" class="label-input mt-3">Close Registrasi</label>
        <input type="date" name="close_reg" id="close_reg" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="reward" class="label-input mt-3">Reward</label>
        <input type="text" name="reward" id="reward" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="term_and_condition" class="label-input mt-3">Syarat & Ketentuan</label>
        <input type="text" name="term_and_condition" id="term_and_condition" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="contact" class="label-input mt-3">Kontak</label>
        <input type="text" name="contact" id="contact" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="poster" class="label-input mt-3">Poster Lomba</label>
        <input type="file" name="poster" id="poster" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <button type="submit" class="btn-primary-normal mt-5">Buat Akun</button>
    </form>
</div>
@endsection
