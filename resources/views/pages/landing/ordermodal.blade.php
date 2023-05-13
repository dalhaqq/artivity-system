<!-- MODAL -->
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
                @if (Auth::user()->id == 1)
                <div class="penolakan space-y-2 text-right">
                    <a href="route('terimaorder', 0)" class="terima rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Terima</a>
                    <a href="route('tolakorder', 0)" class="tolak rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Tolak</a>
                    <a href="route('selesaiorder', 0)" class="selesai rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Selesai</a>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- MODAL -->

<script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>

        $(function(){
            $('#detailpesanan, #detailpesanan-1').on('click', function(){

                const id = $(this).data('idorder');

                $('.selesai').hide()
                $.ajax({
                    url: '{{ env('APP.URL') }}'+'jsondetailorder/'+id,
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
