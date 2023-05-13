@extends('layouts.landing')

@section('title', 'Payment Transfer')

@section('content')
<section class="bg-white ">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl lg:max-w-7xl ">
        <h2 class="text-3xl mb-8 font-bold tracking-tight text-gray-900">Pembayaran</h2>
            @if (session()->has('gagal'))
                <div id="alert-3" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        gagal <span class="font-bold">{{ session('gagal') }}</span> data mesin.
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
        <div class="md:grid gap-8 md:grid-cols-12">
            <div class="border mb-8 flex flex-col py-5 px-5 h-fit border-gray-100 shadow-lg rounded-lg col-span-7">
                <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900">Rincian Pesanan</h2>
                <table class="table-fixed">
                    <tbody>
                        <tr>
                        <td class="text-lg font-medium">Nama produk</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->product->name }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">Jenis Kertas</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->material->name }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">Finishing</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->finishing->name }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">Jumlah Halaman</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->jml_halaman }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">Jumlah Copy</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->jml_copy }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">Keterangan</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium">{{ $pesanan->description }}</td>
                        </tr>
                        <tr>
                        <td class="text-lg font-medium">File</td>
                        <td class="text-lg font-medium">:</td>
                        <td class="text-lg font-medium"><a class="underline" href="{{ $pesanan->file_name }}" target="_blank" rel="noopener noreferrer">Lihat file <i class="fa-solid fa-up-right-from-square text-sm ml-1"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="border flex flex-col col-span-5 py-5 px-5 h-fit border-gray-100 shadow-lg rounded-lg">
                <h2 class="text-2xl mb-4 font-bold tracking-tight text-gray-900">Lakukan Pembayaran</h2>
                <p class="text-lg text-gray-900 font-bold">Transfer ke rekening di bawah :</p>
                <div class="flex flex-col mb-2 border border-gray-100 shadow-md rounded-lg p-5 mt-3">
                    <div class="flex justify-between text-gray-900">
                        <p class="text-lg">Atas nama</p>
                        <p class="totalharga text-lg font-semibold">Nasrul Azis</p>
                    </div>
                    <div class="flex justify-between text-gray-900">
                        <p class="text-lg">BCA</p>
                        <p class="totalharga text-lg font-semibold">0461384942</p>
                    </div>
                    <div class="flex justify-between text-gray-900">
                        <p class="text-lg">Total Tagihan</p>
                        <p class="totalharga text-lg font-semibold">{{ $pesanan->jml_halaman * $pesanan->jml_copy * $pesanan->finishing->price + $pesanan->material->price + $pesanan->product->price }}</p>
                    </div>
                </div>

                <hr class="my-3">

                <form action="{{ route('pay', $pesanan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white" for="buktipembayaran">Upload bukti pembayaran</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="buktipembayaran" type="file" name="bukti_pembayaran">
                    <button type="submit" class="pesan w-full px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg transition ease-in-out duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">Bayar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
