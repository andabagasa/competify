@extends('admins.layouts.main', ['page' => 'dashboard-lomba-update'])

@section('title', 'Update Lomba')

@section('content')
<div>
    <h1>Tambah Lomba</h1>
    <form action="" method="post" class="flex flex-col gap-4">
        <label for="name" class="label-input">Nama</label>
        <input type="text" name="name" id="name" placeholder="Masukkan nama anda" class="input-field">
        <label for="email" class="label-input mt-3">Deskripsi</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Penyelenggara</label>
        <input type="text" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Open Registrasi</label>
        <input type="date" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Close Registrasi</label>
        <input type="date" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Reward</label>
        <input type="text" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Syarat & Ketentuan</label>
        <input type="text" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <label for="no_tlp" class="label-input mt-3">Poster Lomba</label>
        <input type="file" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
        <button type="submit" class="btn-primary-normal mt-5">Buat Akun</button>
    </form>
</div>
@endsection
