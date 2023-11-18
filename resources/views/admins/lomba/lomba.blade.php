@extends('admins.layouts.main', ['page' => 'dashboard-lomba'])

@section('title', 'Dashboard Lomba')

@section('content')
<div class="flex flex-col items-center justify-center gap-12 mt-12">
    <h1 class="text-4xl font-lora font-bold">Daftar Lomba</h1>
    <table class="table-fixed text-center">
        <thead>
        <tr>
            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Poster</th>
            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Nama Lomba</th>
            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Deskripsi</th>
            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Penyelenggara</th>
            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Reward</th>
            <th class="border p-4 border-collapse border-primary-500 w-[400px] bg-primary-500 text-primary-50">Timeline</th>
            <th class="border p-4 border-collapse border-primary-500 w-[400px] bg-primary-500 text-primary-50">Syarat & Ketentuan</th>
        </tr>
        </thead>
        <tbody>
            {{-- @foreach ($menus as $menu)
            <tr class="">
                <td class="border p-2  border-collapse border-primary-500">{{ $menu->name }}</td>
                <td class="border p-2 border-collapse border-primary-500">{{ $menu->category->name }}</td>
                <td class="border p-2 border-collapse border-primary-500 w-[200px]">{{ $menu->description }}</td>
                <td class="border p-2 border-collapse border-primary-500">{{ $menu->price }}</td>
                <td class="border p-2 border-collapse border-primary-500">
                    <img class="ml-auto mr-auto" src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="50" height="50">
                </td>
                <td class="border p-2 border-collapse border-primary-500">
                <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300 mx-8" href="/admin/menu/update/{{ $menu->id }}">
                        Update
                    </a>
                    <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300 mx-8" href="/admin/menu/delete/{{ $menu->id }}" data-confirm-delete="true">
                        Hapus
                    </a>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
