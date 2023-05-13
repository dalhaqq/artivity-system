@extends('layouts.landing')

@section('title', 'Produk')

@section('content')

    <section class="bg-white px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="col-span-full xl:col-span-12">
            <div class="p-3">
                @if (session()->has('berhasil'))
                <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        berhasil <span class="font-bold">{{ session('berhasil') }}</span> data produk.
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
                <div class="overflow-x-auto">
                    <section class="bg-white">
                        <div class="mx-auto max-w-2xl lg:max-w-7xl">
                            <div class="mx-auto max-w-2xl pb-16 px-4 lg:max-w-7xl grid grid-cols-1 gap-x-40 md:grid-cols-3 ">
                                <div id="default-carousel" class="relative w-full md:w-96 " data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative overflow-hidden rounded-lg h-96">
                                        @if ($product->picture->count() != 0)
                                            @foreach ($product->picture as $picture)
                                            <div class="hidden duration-700 rounded-lg ease-in-out" data-carousel-item>
                                                <img src="{{ Storage::url($picture->picture_file) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                            @endforeach
                                            @foreach ($product->picture as $picture)
                                            <div class="hidden duration-700 rounded-lg ease-in-out" data-carousel-item>
                                                <img src="{{ Storage::url($picture->picture_file) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                            @endforeach
                                        @else
                                            @for ($i=0;$i < 4;$i++)
                                            <div class="hidden duration-700 rounded-lg ease-in-out" data-carousel-item>
                                                <img src="{{ asset('assets/product/picture/nopict.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                            @endfor
                                        @endif
                                    </div>
                                    <!-- Slider controls -->
                                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-96 px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                            <span class="sr-only">Previous</span>
                                        </span>
                                    </button>
                                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-96 px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="md:col-span-2">
                                    <h1 class="text-4xl font-bold tracking-wide text-slate-800">{{ $product->name }}</h1>
                                    <span class="text-3xl">Rp&nbsp;{{ $product->price }}</span>
                                    <hr class="my-3">
                                    <h6 class="text-md font-semibold">Deskripsi</h6>
                                    <p>{{ $product->description }}</p>
                                    <hr class="my-3">

                                    @if ($product->kategori->count()!=0)
                                    <h6 class="text-md font-semibold">Kategori</h6>
                                    @foreach ($product->kategori as $kategori)
                                    <ul>
                                        <li>- {{ $kategori->category }}</li>
                                    </ul>
                                    @endforeach
                                    <hr class="my-3">
                                    @endif

                                    @if ($product->finishing->count()!=0)
                                    <h6 class="text-md font-semibold">Finishing</h6>
                                    @foreach ($product->finishing as $finishing)
                                    <ul>
                                        <li>- {{ $finishing->name }}</li>
                                    </ul>
                                    @endforeach
                                    <hr class="my-3">
                                    @endif

                                    <a href="{{ route('pemesanan.index', $product->id) }}">
                                        <button type="button" class="text-blue-600 hover:text-white border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition ease-in w-full">Pesan Produk</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

@endsection
