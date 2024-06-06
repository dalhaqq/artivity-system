@extends('layouts.landing')

@section('title', 'Profile')

@section('content')
<section class="bg-white">
    <article class="items-center pt-14 pb-4 px-4 mx-auto max-w-screen-xl">
    <h2 class="mb-4 text-4xl font-extrabold text-gray-900">Daftar Transaksi</h2>
    </article>
</section>

<section class="bg-white px-4 min-h-screen">
<article class="items-center py-4 px-4 border border-1 border-gray-200 mx-auto max-w-screen-xl lg:grid lg:py-6 lg:px-6 rounded-lg shadow-lg">
    @if (session()->has('berhasil'))
    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
             <span class="font-bold">Berhasil {{ session('berhasil') }}</span>.
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    @endif
    <ul id="accordion-collapse" data-accordion="collapse" role="list" class="divide-y px-3 md:px-8 lg:px-12 divide-gray-200">
        @livewire('list-print-order-cust')
        @foreach ($order as $row)
        <li class="flex items-center justify-between gap-x-6 py-5">
            <div class="min-w-0">
            <div class="flex items-start gap-x-3">
                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $row->product->name }}</p>
                <p class="rounded-md whitespace-nowrap mt-0.5 px-1.5 py-0.5 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">{{ $row->status->name }}</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                <p class="whitespace-nowrap">{{ $row->no_pemesanan }}</p>
                <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 fill-current">
                <circle cx="1" cy="1" r="1" />
                </svg>
                <p class="truncate">{{ $row->buyers->name }}</p>
            </div>
            </div>
            <div class="flex flex-none items-center gap-x-4">
            @if ($row->order_status_id == 1)
            <a id="bayar" href="{{ route('payment', Crypt::encryptString($row->no_pemesanan)) }}" class=" rounded-md bg-indigo-500 px-2.5 py-1.5 text-sm font-semibold text-white shadow-smhover:bg-indigo-600">Bayar</a>
            @endif

            <button id="detailpesanan" data-idorder="{{ $row->id }}" data-modal-target="staticModal" data-modal-toggle="staticModal" type="button" class="hidden rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:block">Detail Pesanan</button>

            <div class="relative flex-none">
                <div class="relative inline-flex" x-data="{ open: false }">
                <button
                    class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                    :class="{ 'bg-slate-200': open }"
                    aria-haspopup="true"
                    @click.prevent="open = !open"
                    :aria-expanded="open"
                >
                <span class="sr-only">Open options</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                </svg>
                </button>
                <div
                    class="origin-top-right z-10 absolute top-full min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1 <?php $align = 'right'; echo e($align === 'right' ? 'right-0' : 'left-0'); ?>"
                    @click.outside="open = false"
                    @keydown.escape.window="open = false"
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    x-cloak
                >
                <ul>
                    <li>
                        <button data-idorder="{{ $row->id }}" id="detailpesanan-1" data-modal-target="staticModal" data-modal-toggle="staticModal" class="font-medium md:hidden text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z" />
                            </svg>
                            <span>Detail Pesanan</span>
                        </button>
                    </li>
                    <li>
                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z" />
                            </svg>
                            <span>Lihat Produk</span>
                        </a>
                    </li>
                    <li>
                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z" />
                            </svg>
                            <span>Beli Lagi</span>
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            </div>
        </li>
        @endforeach
    </ul>
</article>
</section>

@include('pages.landing.ordermodal')
@endsection
