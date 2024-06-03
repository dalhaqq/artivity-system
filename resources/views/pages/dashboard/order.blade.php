<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <div class="relative bg-indigo-200 p-4 sm:p-6 rounded-xl overflow-hidden mb-8">

            <!-- Background illustration -->
            <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z" />
                        <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z" />
                        <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z" />
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%" />
                            <stop stop-color="#818CF8" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                            <stop stop-color="#4338CA" offset="0%" />
                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%" />
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <mask id="welcome-d" fill="#fff">
                                <use xlink:href="#welcome-a" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-a" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z" />
                        </g>
                        <g transform="rotate(-51 91.324 -105.372)">
                            <mask id="welcome-f" fill="#fff">
                                <use xlink:href="#welcome-e" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-e" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z" />
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z" />
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Content -->
            <div class="relative">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Daftar Pesanan</h1>
                <p>Semua data pesanan Artivity</p>
            </div>

        </div>
        <!-- Welcome banner -->

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Card (STOCK)  -->
            <div class="col-span-full xl:col-span-12 bg-white shadow-lg rounded-xl border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Daftar Pesanan</h2>
                </header>
                <div class="py-3">
                    <ul id="accordion-collapse" data-accordion="collapse" role="list" class="divide-y px-3 md:px-8 lg:px-12 divide-gray-200">
                        @livewire('all-print-order')
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
                                            <span>Support Site</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                                <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z" />
                                            </svg>
                                            <span>Contact us</span>
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
                </div>
            </div>
            <!-- Card (STOCK)  -->

        </div>
        @include('pages.landing.ordermodal')
</x-app-layout>
