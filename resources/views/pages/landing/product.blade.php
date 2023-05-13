@extends('layouts.landing')

@section('title', 'Produk')

@section('content')
    <section class="relative overflow-hidden bg-white">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="font text-3xl font-bold tracking-tight text-gray-900 sm:text-6xl">Melayani berbagai jenis percetakan</h1>
                    <p class="mt-4 text-xl text-gray-500">Artivity menyediakan berbagai jenis layanan produk percetakan</p>
                </div>
                <div>
                    <div class="mt-10">
                    <!-- Decorative image grid -->
                        <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                            <div class="flex items-center space-x-6 lg:space-x-8">
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                    <img src="{{ asset('images/product/produk-page-header/hero-1.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-2.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-3.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-4.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-5.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-6.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/product/produk-page-header/hero-7.png') }}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl mb-8 font-bold tracking-tight text-gray-900">Produk dan Layanan Artivity</h2>
            <h2 class="sr-only mb-8">Produk</h2>
            <form class="md:flex md:flex-row-reverse md:gap-6 lg:gap-16" action="">
                <label for="simple-search" class="sr-only">Cari Produk ...</label>
                <div class="relative w-full mb-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Cari Produk ..." required>
                </div>
                <label for="underline_select" class="sr-only">Kategori</label>
                <select id="underline_select" class="block mb-3 py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Kategori Produk</option>
                    <option value="US">Digital Printing</option>
                    <option value="CA">Finishing</option>
                    <option value="FR">Merchandise</option>
                    <option value="DE">Out Door Print</option>
                </select>
            </form>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6">

                    @foreach ($products as $product)
                    <a href="{{ route('produk.show', $product->id) }}" class="shadow-lg rounded-lg group p-3 flex flex-col border border-gray-200 pb-8 transition ease-in hover:bg-neutral-50 hover:shadow-neutral-300 hover:scale-105">
                        <img class="rounded-lg aspect-square mb-2" src="@if ($product->picture->count() != 0)
                        {{ Storage::url($product->picture[0]->picture_file) }}
                        @else
                        assets/product/picture/nopict.jpg
                        @endif" alt="">
                        <small class="text-gray-500">{{ $category->find([$product->category[0]->category_id])->first()->category }}</small>
                        <p class="text-gray-600 font-semibold">{{ $product->name }}</p>
                    </a>
                    @endforeach

            <!-- More products... -->
            </div>
        </div>
    </section>
@endsection
