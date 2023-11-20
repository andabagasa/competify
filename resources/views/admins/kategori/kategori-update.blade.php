@extends('admins.layouts.main', ['page' => 'dashboard-kategori-update'])

@section('title', 'Update Kategori')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Update Kategori Lomba</h1>
    <form action="{{ route('admin.kategori.update', ['id' => $category->category_id]) }}" method="post" class="flex flex-col gap-1 w-[480px] justify-start" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name" class="label-input">Nama Kategori Lomba</label>
        <input type="text" name="name" id="name" class="input-field" value="{{ $category->name }}" required>
        <div class="w-full h-12 flex gap-4 mt-5">
            <a href="/admin/kategori" class="btn-secondary-normal w-full">Kembali</a>
            <button type="submit" class="btn-primary-normal w-full">Tambah Kategori</button>
        </div>
    </form>
</main>
@endsection
