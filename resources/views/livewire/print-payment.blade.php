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
        @error('filePayment')
        <div class="rounded-md bg-red-50 mb-4 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Terdapat {{ $this->getErrorBag()->count() }} kesalahan pada file bukti bayar</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc space-y-1 pl-5">
                            @foreach ($this->getErrorBag()->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @enderror
        <input wire:model='filePayment' accept='.png, .jpg, .jpeg, .heic'
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
            id="filePayment" type="file" name="filePayment" required>

        <button
            wire:loading.attr="disabled"
            wire:target='filePayment'
            wire:click="savePrintOrder" type="button"
            class="mt-5 justify-center inline-flex rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >
            <span wire:loading.remove wire:target='filePayment'>Bayar</span>
        
            <span wire:loading.inline-flex wire:target='filePayment' class="items-center"">
                        <span class=" animate-spin mr-1 self-center inline-block w-4 h-4 border-[3px] border-current
                border-t-transparent text-white rounded-full" role="status" aria-label="loading"></span>
            Loading...
            </span>
        </button>
    </div>
</div>