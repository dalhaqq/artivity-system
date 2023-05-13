@extends('layouts.landing')

@section('title', 'Produk')

@section('content')

    <div class="bg-white">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-24 py-8 px-4 sm:px-6 sm:py-16 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Informasi Kontak</h2>
                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">WhatsApp</dt>
                    <dd class="mt-2 text-sm text-gray-500"><a href="{{ url('https:/wa.me/628132777384') }}6">+62 813-2777-3846</a></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Email</dt>
                    <dd class="mt-2 text-sm text-gray-500"><a href="">artivity.copier@gmail.com</a></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Jam Kerja</dt>
                    <dd class="mt-2 text-sm text-gray-500">Senin - Jumat : 7:00 - 21:00 WIB</dd>
                    <dd class="mt-2 text-sm text-gray-500">Sabtu - Minggu : 8:00 - 21:00 WIB</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Alamat</dt>
                    <dd class="mt-2 text-sm text-gray-500">Jl. Kampus No.604, Brubahan, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53122</dd>
                    </div>

                </dl>
            </div>

            <form>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hubungi kami</h2>
                <div class="grid gap-6 mb-6 md:grid-cols-2 mt-16">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama depan</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Narotama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama belakang</label>
                        <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Basundara" required>
                    </div>
                    <div>
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perusahaan atau Organisasi (Opsional)</label>
                        <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Artivity" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Seluler</label>
                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0812-3456-7890" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="narotama.basundara@artivity.com" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim Email</button>
            </form>

        </div>
    </div>

@endsection
