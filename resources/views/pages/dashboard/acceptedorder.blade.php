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


<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
    <div class="relative w-full max-w-2xl max-h-full transition-all">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 transition-all">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Pesanan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-2">
                <p class="status font-semibold text-base md:text-lg text-gray-900">Status</p>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-sm md:text-base text-gray-900">No.Invoice</p>
                        <p class="font-medium text-sm md:text-base text-gray-900">Nama</p>
                        <p class="font-medium text-sm md:text-base text-gray-900">Tanggal Pemesanan</p>
                        <p class="font-medium text-sm md:text-base text-gray-900">Metode Pembayaran</p>
                    </div>
                    <div class="text-right">
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="no_pemesanan">No.Invoice</p>
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="buyersname">Nama</p>
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="tanggal">Tanggal</p>
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="metode">Metode Pembayaran</p>
                    </div>
                </div>
                <p class="font-semibold text-base md:text-lg text-gray-900">Rincian</p>
                <div>
                <small>Nama Produk :</small>
                <div class="flex justify-between ">
                    <p id="namaproduk" class="font-medium text-sm md:text-base text-gray-900">Nama Produk</p>
                    <p id="hargaproduk" class="font-semibold text-sm md:text-base text-gray-900">Harga Produk</p>
                </div>
                <small class="rinciankertas">Jenis Kertas :</small>
                <div class="rinciankertas flex justify-between ">
                    <p class="namakertas font-medium text-sm md:text-base text-gray-900">Nama Kertas</p>
                    <p class="hargakertas font-semibold text-sm md:text-base text-gray-900">Harga Kertas</p>
                </div>
                <small>Finishing :</small>
                <div class="flex justify-between ">
                    <p class="namafinishing font-medium text-sm md:text-base text-gray-900">Nama Finishing</p>
                    <p class="hargafinishing font-semibold text-sm md:text-base text-gray-900">Harga Finishing</p>
                </div>
                </div>
                <hr class="my-3">
                <div class="flex justify-between ">
                    <p class="text-sm text-gray-900 font-medium">Jumlah Halaman</p>
                    <p class="jmlhal text-gray-900 text-sm font-semibold">1</p>
                </div>
                <div class="flex justify-between ">
                    <p class="text-sm text-gray-900 font-medium">Jumlah Copy</p>
                    <p class="jmlcopy text-gray-900 text-sm font-semibold">1 </p>
                </div>
                <div class="flex justify-between">
                    <p class="font-semibold text-base md:text-lg text-gray-900">Total Harga</p>
                    <p class="totalharga font-semibold text-base md:text-lg text-gray-900">-</p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-between items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <div class="space-y-2 text-left">
                    <a target="_blank" class="buktipembayaran rounded-md bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Bukti Pembayaran</a>
                    <a target="_blank" class="file rounded-md bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">File Cetak</a>
                </div>

                <div class="penolakan space-y-2 text-right">
                    <a href="route('terimaorder', 0)" class="terima rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Terima</a>
                    <a href="route('tolakorder', 0)" class="tolak rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Tolak</a>
                    <a href="route('selesaiorder', 0)" class="selesai rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Selesai</a>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
    <script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>

        $(function(){
            $('#detailpesanan, #detailpesanan-1').on('click', function(){
                const id = $(this).data('idorder');
                $('.selesai').hide()
                $.ajax({
                    url: 'http://artivity.test/'+'jsondetailorder/'+id,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('#no_pemesanan').html(data.no_pemesanan)
                        $('#buyersname').html(data.buyers.name)
                        $('#tanggal').html(moment(data.created_at).format('DD MMMM YYYY'))
                        $('#metode').html(data.payment.name)
                        $('#namaproduk').html(data.product.name)
                        $('#hargaproduk').html(data.product.price)
                        $('.namakertas').html(data.material.name)
                        $('.hargakertas').html(data.material.price)
                        $('.namafinishing').html(data.finishing.name)
                        $('.hargafinishing').html(data.finishing.price)
                        $('.jmlhal').html(data.jml_halaman)
                        $('.jmlcopy').html(data.jml_copy)
                        $('.totalharga').html(data.price)
                        $('.status').html(data.status.name)
                        $('.buktipembayaran').attr('href', data.bukti_pembayaran)
                        $('.file').attr('href', data.file_name)


                        if(data.status.id != 1){
                            $('.tolak').show()
                            $('.terima').show()
                            $('.buktipembayaran').show()
                        }
                        if(data.status.id == 1){
                            $('.terima').hide()
                            $('.tolak').show()
                            $('.buktipembayaran').hide()
                        }
                        if(data.status.id > 2){
                            $('.tolak').hide()
                            $('.terima').hide()
                        }
                        if(data.status.id == 3){
                            $('.selesai').show()
                        }
                    }
                });

                $('.terima').attr('href', '{{ env('APP.URL') }}'+'terima/'+id)
                $('.tolak').attr('href', '{{ env('APP.URL') }}'+'tolak/'+id)
                $('.selesai').attr('href', '{{ env('APP.URL') }}'+'selesai/'+id)
            });
        });
    </script>
</x-app-layout>
