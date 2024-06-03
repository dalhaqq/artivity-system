<div class="mx-auto flex flex-col px-4 sm:px-6 lg:px-8 py-8 w-full gap-y-8 max-w-9xl lg:max-w-7xl ">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Pembayaran</h2>
    
    <div class="md:grid gap-8 md:grid-cols-12">
        <div class="border mb-8 flex flex-col py-5 px-5 h-full border-gray-100 shadow-lg rounded-lg col-span-7">
            <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900">Rincian Pesanan</h2>
            <table class="min-w-full divide-y divide-gray-300">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Produk</td>
                        <td class="font-medium">Cetak Dokumen</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Nama File</td>
                        <td class="font-medium">{{$printPayment['filename']}}</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Jumlah Halaman</td>
                        <td class="font-medium">{{$printPayment['page']}}</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Jenis Kertas</td>
                        <td class="font-medium">{{$printPayment['jenis_kertas']}}</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Jenis Cetak</td>
                        <td class="font-medium">{{$printPayment['jenisCetak']}}</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 font-semibold">Jumlah Copy</td>
                        <td class="font-medium">{{$printPayment['jml_copy']}}</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-3 pr-10 font-semibold">Catatan</td>
                        <td class="font-medium">{{$printPayment['description'] ?? '-'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="border flex flex-col col-span-5 py-5 px-5 h-full border-gray-100 shadow-lg rounded-lg">
            <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900">Qris Payment</h2>
            <p class="text-lg text-center text-gray-900 font-bold">Total Bayar : Rp {{number_format($printPayment['pricetopay'], 0, ",", ".")}}</p>
            <div
                class="flex flex-col w-fit self-center items-center mb-2 border border-gray-100 shadow-md rounded-lg p-5 mt-3">
                <img class=""
                    src="{{ asset('images/payment/qrcode.png') }}" alt="QRIS ARTIVITY">
            </div>
        </div>
    </div>

    <div class="border flex flex-col col-span-5 py-5 px-5 h-fit border-gray-100 shadow-lg rounded-lg">
        <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white" for="buktipembayaran">Upload
            Bukti Pembayaran</label>
        <input wire:model='filePayment'
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
            id="filePayment" type="file" name="filePayment" required>
        
        <button wire:click='savePrintOrder'
            class="pesan w-full px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">Bayar</button>
    </div>
</div>