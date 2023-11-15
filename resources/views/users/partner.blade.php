@extends('users.layouts.main', ['page' => 'partner'])

@section('title', 'Partner')

@section('content')
<main>
    <!-- Header  -->
    <header class="mx-24 mt-12">
        <div class=" w-full mx-auto h-60 relative bg-blue-600 rounded-3xl flex justify-center flex-wrap">
            <div class=" text-center text-white text-5xl font-bold  self-center w-full mt-16 ">Partner
            </div>
            <div class="w-[714px] text-center text-neutral-50 text-base font-normal  leading-normal mb-16 mt-4">
                Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit
                proin urna lorem ac potenti morbi.
            </div>

            <div class="absolute bottom-0 right-0"><img src="{{ asset('assets/images/tl.png') }}" alt=""></div>
            <div class="absolute top-0 left-0"><img src="{{ asset('assets/images/rb.png') }}" alt=""></div>

        </div>
    </header>

    <!-- Header -->

    <!-- Main -->
    <section id="main" class="mt-12 mx-24  ">
        <div class=" grid grid-cols-4 gap-4  ">
            <aside class="bg-white col-span-1  rounded-2xl p-6 h-max ">
                <!-- filter -->
                <div class="container">
                    <div class="flex flex-wrap justify-between">
                        <div class="flex items-center">
                             <x-phosphor-funnel class="w-7 h-7" />
                            <p class="text-black text-2xl font-bold">filter</p>
                        </div>
                        <a href="" class="self-center text-primary-300 text-sm font-semibold">reset</a>
                    </div>

                    <div class="flex flex-wrap  ">
                        <p class="text-black text-base font-semibold mt-7 mb-4 w-full">Keminatan</p>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">UI/UX</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">BC/BIC</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">CTF</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">Software Development</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">Poster</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">Essay</p>
                        </div>
                        <div class="flex flex-wrap w-full mt-2 ">
                            <input type="checkbox" id="myCheckbox" class="">
                            <p class="pl-2 text-black text-sm font-normal">Debat</p>
                        </div>
                    </div>
                </div>

            </aside>
            <main class=" col-span-3 ">
                <!-- search -->
                <div class="flex justify-end">
                    <div class="w-2/3 border border-stone-300 rounded-lg">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full py-3 px-6 ps-10 text-neutral-400 text-base font-normal rounded-lg "
                                placeholder="Cari Mentor" required>
                        </div>
                    </div>
                </div>
                <!-- search -->

                <!-- carousel -->
                <div class="mt-6 mb-12">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg">
                            <img src="https://via.placeholder.com/300x240" alt=""
                                class="w-full h-40 rounded-t-lg">
                            <div class="p-4 flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <p class="tag">UI/UX</p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-2xl font-bold">Rayhan Wahyu T</h3>
                                    <p class="text-sm text-neutral-500">Teknik Informatika - 2021</p>
                                </div>
                            </div>

                        </div>



                        <!-- carousel -->

                        <!-- pagination -->
                        <!-- pagination -->

            </main>

        </div>


    </section>
    <!-- Main -->

</main>
@endsection
