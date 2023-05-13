@extends('layouts.landing')

@section('title', 'Payment Qris')

@section('content')
<section class="bg-white ">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl lg:max-w-7xl ">
        <h2 class="text-3xl mb-8 font-bold tracking-tight text-gray-900">Pembayaran</h2>
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
                <p class="text-lg text-gray-900 font-bold">Scan kode QRIS di bawah :</p>
                <div class="flex flex-col w-fit self-center items-center mb-2 border border-gray-100 shadow-md rounded-lg p-5 mt-3">
                    <p class="text-lg font-semibold text-gray-900  ">ARTIVITY</p>
                    <div class="flex gap-3 mb-4 text-gray-900">
                        <p class="text-lg font-semibold">Total Tagihan</p>
                        <p class="text-lg font-semibold">:</p>
                        <p class="totalharga text-lg font-semibold">{{ $pesanan->jml_halaman * $pesanan->jml_copy * $pesanan->finishing->price + $pesanan->material->price + $pesanan->product->price }}</p>
                    </div>
                    <img class="w-48 h-48 animate-pulse animate-infinite animate-ease-in" src="{{ asset('images/payment/qrcode.png') }}" alt="QRIS ARTIVITY">
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
