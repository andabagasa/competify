@extends('admins.layouts.main', ['page' => 'dashboard-lomba'])

@section('title', 'Dashboard Lomba')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Daftar Lomba</h1>
    <div class="flex flex-col gap-6 justify-end items-end">
        <a href="/admin/lomba-create" class="btn-primary-normal w-fit">
            <p>Tambah Lomba</p>
        </a>
        <table class="w-full table-fixed">
            <thead>
                <tr>
                    <th class="table-head">Poster Lomba</th>
                    <th class="table-head">Nama Lomba</th>
                    <th class="table-head">Kategori</th>
                    <th class="table-head">Deskripsi</th>
                    <th class="table-head w-auto">Pelaksana</th>
                    <th class="table-head">Timeline</th>
                    <th class="table-head">Syarat & Ketentuan</th>
                    <th class="table-head">Reward</th>
                    <th class="table-head">Kontak</th>
                    <th class="table-head">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informasiLombas as $informasiLomba)
                <tr>
                    <td class="table-body">
                        <img src="{{ Storage::url($informasiLomba->poster) }}" class="w-12 h-auto">
                    </td>
                    <td class="table-body">{{ $informasiLomba->title }}</td>
                    <td class="table-body">
                        @foreach ($informasiLomba->InformasiLombaCategory as $category)
                        {{ optional($category->Category)->name }},
                        @endforeach
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->description }}
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->organizer_name }}
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->open_reg }} - {{ $informasiLomba->close_reg }}
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->term_and_condition }}
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->reward }}
                    </td>
                    <td class="table-body">
                        {{ $informasiLomba->contact }}
                    </td>
                    <td class="table-body">
                        <div class="flex gap-4">
                            <a href="{{ route('admin.lomba.edit', ['id' => $informasiLomba->id_lomba]) }}" class="w-fit bg-yellow-500 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-yellow-600"><x-phosphor-pencil-simple class="w-6 h-6"/></a>
                            <form action="{{ route('lomba.destroy', $informasiLomba->id_lomba) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this Lomba?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="w-fit bg-red-600 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-red-700">
                                    <x-phosphor-trash class="w-6 h-6"/>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection