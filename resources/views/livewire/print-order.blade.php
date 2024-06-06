<div class="mx-auto flex flex-col px-4 sm:px-6 lg:px-8 py-8 w-full gap-y-8 max-w-9xl lg:max-w-7xl ">
    <h2 class="text-3xl mb-8 font-bold tracking-tight text-gray-900">Pemesanan</h2>
    
    <div class="md:grid gap-8 md:grid-cols-12">
        
        <div class="border mb-8 flex flex-col py-5 px-5 h-full border-gray-100 shadow-lg rounded-lg col-span-7">
            <h2 class="text-2xl mb-2 font-bold tracking-tight text-gray-900">Cetak Dokumen</h2>
            <p class="text-lg mb-4 truncate ine font-medium text-gray-900">{{$printOrder['filename']}}</p>
            <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900"></h2>
            <form action="{{route('printPayment')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="hidden" type="text" name="page" value="{{$printOrder['page']}}">
                <input class="hidden" type="text" name="pricetopay" value="{{$totalHarga}}">
                <input class="hidden" type="text" name="filename" value="{{$printOrder['filename']}}">
                <input class="hidden" type="text" name="filepath" value="{{$printOrder['path']}}">
                
                <div class="flex gap-4 flex-col sm:flex-row">

                    <div class="custom-kertas">
                        <label for="custom-kertas" class="w-full text-gray-700 text-lg font-medium">Jenis Kertas</label>
                        <ul class="w-full flex mt-1">
                            <li>
                                <input checked type="radio" id="a4" name="jenis_kertas" value="a4" class="hidden peer" required>
                                <label for="a4"
                                    class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-r-0 peer-checked:border-r-2 transition ease-in duration-150 border-gray-200 rounded-l cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class="w-full text-sm font-semibold">A4</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="f4" name="jenis_kertas" value="f4" class="hidden peer" required>
                                <label for="f4"
                                    class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-l-0 peer-checked:border-l-2 transition ease-in duration-150 border-gray-200 rounded-r cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class="w-full text-sm font-semibold">F4</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-number-input">
                        <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Sisi
                            Cetak</label>
                        <ul class="flex w-full md:grid-cols-2 mt-1">
                            <li>
                                <input checked type="radio" id="1" name="jml_sisi" value="1" class="hidden peer" required>
                                <label for="1"
                                    class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-r-0 peer-checked:border-r-2 transition ease-in duration-150 border-gray-200 rounded-l cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class="w-full text-sm font-semibold">1 Sisi</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="2" name="jml_sisi" value="2" class="hidden peer" required>
                                <label for="2"
                                    class="inline-flex items-center justify-center h-10 w-16 text-gray-500 bg-white border-2 border-l-0 peer-checked:border-l-2 transition ease-in duration-150 border-gray-200 rounded-r cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class="w-full text-sm font-semibold">2 Sisi</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="flex mt-8 gap-4 flex-col sm:flex-row">

                    <div class="custom-cetak">
                        <label for="custom-cetak" class="w-full text-gray-700 text-lg font-medium">Jenis Cetak</label>
                        <ul class="flex w-full mt-1">
                            <li>
                                <input wire:model.live='jenisCetak' checked type="radio" id="warna" name="jenisCetak" value="warna" class="hidden peer" required>
                                <label for="warna"
                                    class="inline-flex items-center px-4 justify-center h-10 text-gray-500 bg-white border-2 border-r-0 peer-checked:border-r-2 transition ease-in duration-150 border-gray-200 rounded-l cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class=" text-sm font-semibold">Berwarna</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input wire:model.live='jenisCetak' type="radio" id="bw" name="jenisCetak" value="bw" class="hidden peer" required>
                                <label for="bw"
                                    class="inline-flex  px-4 items-center justify-center h-10 text-gray-500 bg-white border-2 border-l-0 peer-checked:border-l-2 transition ease-in duration-150 border-gray-200 rounded-r cursor-pointer peer-checked:border-blue-400 peer-checked:text-blue-400 hover:text-gray-600 hover:bg-gray-100">
                                    <div class="block">
                                        <div class=" text-sm font-semibold">Hitam Putih</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-number-input">
                        <label for="custom-input-number" class="w-full text-gray-700 text-lg font-medium">Jumlah
                            Copy</label>
                        <div
                            class="flex border-2 border-blue-400 flex-row h-10 w-32 rounded relative bg-transparent mt-1">
                            <button wire:click="decjumlahCopy" type="button" data-action="decrement"
                                class=" text-blue-400 hover:text-blue-700  h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">-</span>
                            </button>
                            <input wire:model.live='jumlahCopy' type="number" id="copy" name="jml_copy" min="1"
                                class="text-center border-none focus:ring-transparent w-full font-semibold text-md hover:text-blue-700 focus:text-blue-700 md:text-basecursor-default flex items-center text-blue-400">
                            </input>
                            <button wire:click="incjumlahCopy" type="button" data-action="increment"
                                class="text-blue-400 hover:text-blue-700  h-full w-20 rounded-r cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>

                </div>

                <label for="catatan" class="block text-lg mt-8 pb-2 font-medium text-gray-900 dark:text-white">Catatan</label>
                <textarea name="description" id="catatan" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tambahkan catatan untuk pesanan Anda (optional)"></textarea>
        </div>

        <div class="border flex flex-col col-span-5 py-5 px-5 h-fit border-gray-100 shadow-lg rounded-lg">
            <h2 class="text-2xl mb-8 font-bold tracking-tight text-gray-900">Ringkasan Pesanan</h2>

            <div class="flex justify-between mb-2">
                <p class="font-medium">Harga</p>
                <p class="jmlhal font-medium">{{number_format($harga, 0, ",", ".")}}</p>
            </div>
            <div class="flex justify-between mb-2">
                <p class="font-medium">Jumlah Copy</p>
                <p class="jmlcopy font-medium">x{{$jumlahCopy}}</p>
            </div>

            <hr class="my-3">

            <div class="flex justify-between mb-2">
                <p class="text-lg font-semibold">Total Harga</p>
                <p class="totalharga text-lg font-semibold">{{number_format($totalHarga, 0, ",", ".")}}</p>
            </div>
            <div class="flex gap-x-2">

                <a href="{{route('uploadfile')}}"><button
                class="pesan px-8 py-2 mt-5 text-sm font-medium text-center text-white bg-gray-400 rounded-md transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300"
                >Batal</button></a>
                <button type="submit"
                class="pesan w-full px-3 py-2 mt-5 text-sm font-medium text-center text-white accent-blue-400 bg-blue-400 rounded-md transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300"
                >Lanjut Pembayaran</button>
            </div>
            </form>
        </div>

    </div>

    <div data-popover id="detail-finishing" role="tooltip"
        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        <div class="p-3 space-y-2">
            
        </div>
        <div data-popper-arrow></div>
    </div>
    
    <div data-popover id="detail-kertas" role="tooltip"
        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        <div class="p-3 space-y-2">
            
        </div>
        <div data-popper-arrow></div>
    </div>
</div>