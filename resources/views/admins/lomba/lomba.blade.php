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
                <tr>
                    <td class="table-body">
                        <img src="" alt="" class="w-12 h-auto">
                    </td>
                    <td class="table-body">Hology 6.0</td>
                    <td class="table-body">

                    </td>
                    <td class="table-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi molestiae repellendus quam suscipit, nulla ea non laudantium at modi dolorum iusto quas velit vitae nam iste officia assumenda quae libero.
                    </td>
                    <td class="table-body">
                        FILKOM Universitas Brawijaya
                    </td>
                    <td class="table-body">
                        12/10/2023 - 16/10/2023
                    </td>
                    <td class="table-body">
                        link
                    </td>
                    <td class="table-body">
                        Juara 1 6.500.000
                    </td>
                    <td class="table-body">
                        0909039123
                    </td>
                    <td class="table-body">
                        <div class="flex gap-4">
                            <a href="/admin/lomba-update" class="w-fit bg-yellow-500 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-yellow-600"><x-phosphor-pencil-simple class="w-6 h-6"/></a>
                            <a href="" class="w-fit bg-red-600 text-white text-center p-2 duration-100 rounded-lg cursor-pointer hover:bg-red-700"><x-phosphor-trash class="w-6 h-6"/></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection