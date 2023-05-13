@extends('layouts.landing')

@section('title', 'Produk')

@section('content')
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <section class="bg-white ">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl lg:max-w-7xl ">
            <h2 class="text-3xl mb-8 font-bold tracking-tight text-gray-900">Pemesanan</h2>
            <div class="grid gap-8 grid-cols-12">
                <div class="border flex flex-col py-5 px-5 border-gray-100 shadow-lg rounded-lg col-span-7">
                    <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900">{{ $produk->name }}</h2>
                    <form action="{{route('pemesanan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $produk->id }}">
                        <input id="price" type="hidden" name="price" value="">
                        <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white" for="default_size">Upload File</label>
                        <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file" name="file_name">

                        <div class="flex gap-8 ">
                            <div class="custom-number-input h-10 w-fit">
                                <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Jumlah Halaman</label>
                                <div class="flex border-2 border-blue-400 flex-row h-10 w-32 rounded relative bg-transparent mt-1">
                                    <button type="button" data-action="decrement" class=" text-blue-400 hover:text-blue-700  h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">-</span>
                                    </button>
                                    <input type="number" id="halaman" name="jml_halaman" min="1" class="text-center border-none focus:ring-transparent w-full font-semibold text-md hover:text-blue-700 focus:text-blue-700 md:text-basecursor-default flex items-center text-blue-400" value="1"></input>
                                    <button type="button" data-action="increment" class="text-blue-400 hover:text-blue-700  h-full w-20 rounded-r cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>

                            <div class="custom-number-input h-10 w-fit">
                                <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Jumlah Copy</label>
                                <div class="flex border-2 border-blue-400 flex-row h-10 w-32 rounded relative bg-transparent mt-1">
                                    <button type="button" data-action="decrement" class=" text-blue-400 hover:text-blue-700  h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">-</span>
                                    </button>
                                    <input type="number" id="copy" name="jml_copy" min="1" class="text-center border-none focus:ring-transparent w-full font-semibold text-md hover:text-blue-700 focus:text-blue-700 md:text-basecursor-default flex items-center text-blue-400" value="1"></input>
                                    <button type="button" data-action="increment" class="text-blue-400 hover:text-blue-700  h-full w-20 rounded-r cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>

                            <div class="custom-number-input h-10 w-fit">
                                <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Sisi Cetak</label>
                                <ul class="grid w-full md:grid-cols-2 mt-1">
                                    <li>
                                        <input checked type="radio" id="1" name="jml_sisi" value="1" class="hidden peer" required>
                                        <label for="1" class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-r-0 peer-checked:border-r-2 transition ease-in duration-150 border-gray-200 rounded-l cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                            <div class="block">
                                                <div class="w-full text-sm font-semibold">1 Sisi</div>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="2" name="jml_sisi" value="2" class="hidden peer" required>
                                        <label for="2" class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-l-0 peer-checked:border-l-2 transition ease-in duration-150 border-gray-200 rounded-r cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                            <div class="block">
                                                <div class="w-full text-sm font-semibold">2 Sisi</div>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex mt-12 gap-4 mb-2">
                            <div class="w-full">
                                <label for="kertas" class="block text-lg font-medium text-gray-900 dark:text-white">Pilih Jenis Kertas <button data-popover-target="detail-kertas" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></label>
                                <select id="kertas" name="material_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected>Pilih Kertas</option>
                                    @foreach ($produk->stock as $kertas)
                                    <option value="{{ $kertas->id }}">{{ $kertas->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full">
                                <label for="finishing" class="block text-lg font-medium text-gray-900 dark:text-white">Pilih Jenis Finishing <button data-popover-target="detail-finishing" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></label>
                                <select id="finishing" name="finishing_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Pilih Finishing</option>
                                    @foreach ($produk->finishing as $finishing)
                                    <option value="{{ $finishing->id }}">{{ $finishing->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="custom-number-input h-10 w-fit mb-12">
                            <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Metode Pembayaran</label>
                            <ul class="grid w-full md:grid-cols-2 mt-1 gap-3">
                                <li>
                                    <input type="radio" id="pembayaran" name="metode_pembayaran_id" value="1" class="hidden peer pembayaran" required>
                                    <label for="pembayaran" class="text-gray-500 px-4 py-2 transition ease-in duration-300 bg-white border-2 border-gray-200 rounded-md cursor-pointer peer-checked:border-blue-400 peer-checked:font-semibold hover:text-gray-600 hover:bg-gray-100 text-center inline-flex items-center">
                                        <img src="{{ asset('images/payment/qris.png') }}" alt="QRIS" class="w-10 mr-2 -ml-1">
                                        Bayar dengan QRIS
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="pembayaran2" name="metode_pembayaran_id" value="2" class="hidden peer pembayaran" required>
                                    <label for="pembayaran2" class="text-gray-500 px-4 py-2 transition ease-in duration-300 bg-white border-2 border-gray-200 rounded-md cursor-pointer peer-checked:border-blue-400 peer-checked:font-semibold hover:text-gray-600 hover:bg-gray-100 text-center inline-flex items-center">
                                        <img src="{{ asset('images/payment/banktransfer.png') }}" alt="QRIS" class="h-6 mr-2 -ml-1">
                                        Bank Transfer
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <label for="catatan" class="block text-lg font-medium text-gray-900 dark:text-white">Catatan</label>
                        <textarea name="description" id="catatan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambahkan catatan untuk pesanan Anda (optional)"></textarea>
                </div>

                <div class="border flex flex-col col-span-5 py-5 px-5 h-fit border-gray-100 shadow-lg rounded-lg">
                    <h2 class="text-2xl mb-8 font-bold tracking-tight text-gray-900">Ringkasan Pesanan</h2>
                    <small>Nama Produk :</small>
                    <div class="flex justify-between mb-2">
                        <p class="text-lg font-medium">{{ $produk->name }}</p>
                        <p class="text-lg font-medium">{{ $produk->price }}</p>
                    </div>
                    <small class="rinciankertas">Jenis Kertas :</small>
                    <div class="rinciankertas flex justify-between mb-2">
                        <p class="namakertas text-lg font-medium">-</p>
                        <p class="hargakertas text-lg font-medium">-</p>
                    </div>
                    <small>Finishing :</small>
                    <div class="flex justify-between mb-2">
                        <p class="namafinishing text-lg font-medium">-</p>
                        <p class="hargafinishing text-lg font-medium">-</p>
                    </div>
                    <hr class="my-3">
                    <div class="flex justify-between mb-2">
                        <p class="text-sm font-medium">Jumlah Halaman</p>
                        <p class="jmlhal text-sm font-medium">1</p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="text-sm font-medium">Jumlah Copy</p>
                        <p class="jmlcopy text-sm font-medium">1 </p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="text-lg font-semibold">Total Harga</p>
                        <p class="totalharga text-lg font-semibold">-</p>
                    </div>
                    <button type="submit" class="pesan px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-gray-400 rounded-lg transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-not-allowed" disabled>Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div data-popover id="detail-finishing" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        <div class="p-3 space-y-2">
            @foreach ($produk->finishing as $finishing)
            <h3 class="font-semibold text-gray-900 dark:text-white" value="{{ $kertas->id }}">{{ $finishing->name }}</h3>
            <p>{{ $finishing->description }}</p>
            @endforeach
        </div>
        <div data-popper-arrow></div>
    </div>

    <div data-popover id="detail-kertas" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        <div class="p-3 space-y-2">
            @foreach ($produk->stock as $kertas)
            <h3 class="font-semibold text-gray-900 dark:text-white" value="{{ $kertas->id }}">{{ $kertas->name }}</h3>
            <p>{{ $kertas->description }}</p>
            @endforeach
        </div>
        <div data-popper-arrow></div>
    </div>

    <script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#kertas').on('change', function(){
                const id = $('#kertas').val();
                $.ajax({
                    url: 'http://10.0.243.242/jsonkertas/'+id,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('.namakertas').html(data.name)
                        $('.hargakertas').html(data.price)
                    }
                });
            });
        });

        $(function(){
            $('#finishing').on('change', function(){
                const id = $('#finishing').val();
                $.ajax({
                    url: 'http://10.0.243.242/jsonfinishingorder/'+id,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('.namafinishing').html(data.name)
                        $('.hargafinishing').html(data.price)
                    }
                });
            });
        });

        $(function(){
            $('#finishing, #kertas, #halaman, #copy, .pembayaran').on('change', function(){
                kertas = $('#kertas').val()
                finishing = $('#finishing').val()
                copy = $('#copy').val()
                halaman = $('#halaman').val()
                produk = {{ $produk->id }}
                $.ajax({
                    url: 'http://10.0.243.242/jsonhitung/'+produk+'/'+kertas+'/'+finishing,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('.totalharga').html(data*halaman*copy)
                        $('#price').val(data*halaman*copy)
                    }
                });
                if($('#kertas').val() != "" && $('#finishing').val() != "" && $('.pembayaran').is(':checked')){
                    $('.pesan').attr('class', 'pesan px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300')
                    $('.pesan').prop("disabled", false);
                }else{
                    $('.pesan').attr('class', 'pesan px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-gray-400 rounded-lg transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-not-allowed')
                    $('.pesan').prop("disabled", true);
                }
            });
        });

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            if (value > 1){
                value--;
            }
            target.value = value;
            kertas = $('#kertas').val()
            finishing = $('#finishing').val()
            copy = $('#copy').val()
            halaman = $('#halaman').val()
            $('.jmlhal').html(halaman)
            $('.jmlcopy').html(copy)
            produk = {{ $produk->id }}
            $.ajax({
                url: 'http://10.0.243.242/jsonhitung/'+produk+'/'+kertas+'/'+finishing,
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    $('.totalharga').html(data*halaman*copy)
                    $('#price').val(data*halaman*copy)
                }
            });
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
            kertas = $('#kertas').val()
            finishing = $('#finishing').val()
            copy = $('#copy').val()
            halaman = $('#halaman').val()
            $('.jmlhal').html(halaman)
            $('.jmlcopy').html(copy)
            produk = {{ $produk->id }}
            $.ajax({
                url: 'http://10.0.243.242/jsonhitung/'+produk+'/'+kertas+'/'+finishing,
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    console.log(halaman)
                    $('.totalharga').html(data*halaman*copy)
                    $('#price').val(data*halaman*copy)
                }
            });
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>

@endsection
