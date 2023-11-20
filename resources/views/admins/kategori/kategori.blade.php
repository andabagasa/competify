@extends('admins.layouts.main', ['page' => 'dashboard-kategori'])

@section('title', 'Dashboard Kategori')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Daftar Kategori Lomba</h1>
    <div class="flex flex-col gap-6 justify-end items-end">
        <a href="/admin/kategori-create" class="btn-primary-normal w-fit">
            <p>Tambah Kategori Lomba</p>
        </a>
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="w-[240px] table-head">Kategori</th>
                    <th class="table-head">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($categories as $category)
                    <td class="table-body">{{ $category->name }}</td>
                    <td class="table-body">
                        <div class="flex gap-4">
                            <a href="{{ route('admin.kategori.edit', ['id' => $category->category_id]) }}" class="w-fit bg-yellow-500 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-yellow-600"><x-phosphor-pencil-simple class="w-6 h-6"/></a>
                            <form action="{{ route('kategori.destroy', $category->category_id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this Kategori?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="w-fit bg-red-600 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-red-700">
                                    <x-phosphor-trash class="w-6 h-6"/>
                                </button>
                            </form>
                        </div>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
