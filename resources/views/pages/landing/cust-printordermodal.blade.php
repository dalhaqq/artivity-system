<div wire:ignore.self id="printOrderCust" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
    <div class="relative w-full max-w-2xl max-h-full transition-all">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 transition-all">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Cetak Dokumen
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="printOrderCust">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-2">
                <p class="rounded-md w-fit whitespace-nowrap mt-0.5 px-1.5 py-0.5 font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">{{$Order_status_id}}</p>
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-sm md:text-base text-gray-900">No.Invoice</p>
                        <p class="font-medium text-sm md:text-base text-gray-900">Nama</p>
                        <p class="font-medium text-sm md:text-base text-gray-900">Tanggal Pemesanan</p>
                    </div>
                    <div class="text-right">
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="no_pemesanan">{{$No_pemesanan}}</p>
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="buyersname">{{$Buyers_name}}</p>
                        <p class="font-semibold text-sm md:text-base text-gray-900" id="tanggal">{{ \Carbon\Carbon::parse($Created_at)->isoFormat('D MMMM Y') }}</p>
                    </div>
                </div>
                <div>
                <small class="rinciankertas">Jenis Kertas :</small>
                <div class="rinciankertas flex justify-between ">
                    <p class="namakertas font-medium text-sm md:text-base text-gray-900">{{Str::title($Jenis_kertas)}}</p>
                </div>
                <small>Jenis Cetak :</small>
                <div class="flex justify-between ">
                    <p class="namafinishing font-medium text-sm md:text-base text-gray-900">{{Str::title($Jenis_cetak)}}@if ($Two_side)
                       - Bolak Balik                        
                    @endif</p>
                </div>
                <small>Catatan :</small>
                <div class="flex justify-between ">
                    <p class="namafinishing font-medium text-sm md:text-base text-gray-900">{{Str::title($Catatan)}}</p>
                </div>
                </div>
                <hr class="my-3">
                <div class="flex justify-between ">
                    <p class="text-sm text-gray-900 font-medium">Jumlah Halaman</p>
                    <p class="jmlhal text-gray-900 text-sm font-semibold">{{$Jml_halaman}}</p>
                </div>
                <div class="flex justify-between ">
                    <p class="text-sm text-gray-900 font-medium">Jumlah Copy</p>
                    <p class="jmlcopy text-gray-900 text-sm font-semibold">{{$Jml_copy}}</p>
                </div>
                <div class="flex justify-between">
                    <p class="font-semibold text-base md:text-lg text-gray-900">Total Harga</p>
                    <p class="totalharga font-semibold text-base md:text-lg text-gray-900">Rp {{number_format($Harga, 0, ",", ".")}}</p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-between items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <div class="space-y-2 text-left">
                    
                    <a href="{{ Storage::url($Bukti_bayar) }}" target="_blank" class="buktipembayaran rounded-md bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Bukti Pembayaran</a>
                    <a href="{{ asset('storage/file_print_order/' . $File) }}" target="_blank" class="file rounded-md bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">File Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>