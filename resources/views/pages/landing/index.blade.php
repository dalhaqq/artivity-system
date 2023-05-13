@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <section class="bg-white pb-8 pt-4 px-6">
        <div style="border-bottom-right-radius : 250px;" class="grid bg-gradient-to-br from-blue-500 to-blue-100 rounded-3xl py-8 px-10 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl text-white">One Stop Printing and Document Solution</h1>
                <p class="mb-6 mt-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-l ">Pusat layanan dokumen dan printing yang bergerak di bidang cetak-mencetak berbagai jenis media kertas dan mengerjakan finishing dalam hal penjilidan</p>
                <a href="#" class="inline-flex mt-3 bg-white justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-gray-800 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                    Pesan Sekarang
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex mt-3 justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white transition-all hover:bg-gray-100 hover:text-gray-800 focus:ring-4 focus:ring-gray-100 ">
                    Katalog Produk
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/Saly-10.png') }}" alt="mockup">
            </div>
        </div>
    </section>

    <section  class="bg-gradient-to-b from-white via-blue-100 to-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl flex flex-col  sm:py-16 lg:px-6">
            <div class="mb-8 max-w-screen-md self-center text-center lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 ">Kenapa harus kami</h2>
                <p class="text-gray-500 sm:text-xl ">Keunggulan dan pelayanan prima dari Artivity untuk kepuasan pelanggan setia</p>
            </div>
            <div id="unggulan" class=" grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="flex flex-row gap-x-8 bg-white shadow-lg rounded-2xl p-8">
                    <div class="bg-gradient-to-b from-yellow-200 to-yellow-300 rounded-lg h-fit w-fit fill-white p-4">
                    <img class="aspect-1 w-24" src="{{ asset('images/landing-icon/print-solid.svg') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h3 class="mb-2 text-xl font-bold">Mesin Berkualitas</h3>
                        <p class="text-gray-500">Menggunakan mesin cetak yang berkualitas dan terawat untuk menjamin mutu hasil cetakan</p>
                    </div>
                </div>

                <div class="flex flex-row gap-x-8 bg-white shadow-lg rounded-2xl p-8">
                    <div class="bg-gradient-to-b from-red-200 to-red-600 rounded-lg h-fit w-fit fill-white p-4">
                    <img class="aspect-1 w-24" src="{{ asset('images/landing-icon/people-line-solid.svg') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h3 class="mb-2 text-xl font-bold">Pelayanan Prima</h3>
                        <p class="text-gray-500">Melayani seluruh pelanggan dengan sepenuh hati dengan kepuasan pelanggan sebagai prioritas</p>
                    </div>
                </div>

                <div class="flex flex-row gap-x-8 bg-white shadow-lg rounded-2xl p-8">
                    <div class="bg-gradient-to-b from-green-300 to-green-500 rounded-lg h-fit w-fit fill-white p-4">
                    <img class="aspect-1 w-24" src="{{ asset('images/landing-icon/star-solid.svg') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h3 class="mb-2 text-xl font-bold">One Stop Printing </h3>
                        <p class="text-gray-500">Menyediakan layanan lengkap untuk solusi kebutuhan printing Anda. Dari tahap desain hingga Finishing</p>
                    </div>
                </div>

                <div class="flex flex-row gap-x-8 bg-white shadow-lg rounded-2xl p-8">
                    <div class="bg-gradient-to-b from-blue-200 to-blue-600 rounded-lg h-fit w-fit fill-white p-4">
                    <img class="aspect-1 w-24" src="{{ asset('images/landing-icon/wand-magic-sparkles-solid.svg') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h3 class="mb-2 text-xl font-bold">Hasil Cetak Tajam</h3>
                        <p class="text-gray-500">Memberikan hasil cetak yang memuaskan dalam segala media dengan mutu kualitas yang terjamin</p>
                    </div>
                </div>

            </div>
        </div>
      </section>

    <section class="bg-white ">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg ">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 ">Solusi cetak tanpa minimum order!</h2>
                <p class="mb-4">Gak usah khawatir dengan minimal order lagi deh, karena solusi cetak ini membebaskan kamu dari aturan itu. Jadi kamu bisa memesan cetakan mulai dari satu buah saja, dan pilihan produknya juga banyaaak banget. Ada undangan, kartu nama, brosur, stiker, sampai banner, semuanya bisa kamu cetak tanpa ribet!</p>
                <p>Kamu bisa pilih sendiri kertas, ukuran, dan desain yang kamu inginkan. Jadi kamu gak lagi terbatas dengan pilihan yang ada, dan bisa lebih kreatif lagi dalam mendesain cetakanmu. Dengan solusi cetak tanpa minimum order, kamu bisa dengan mudah dan fleksibel mencetak produkmu tanpa khawatir dengan aturan minimal order yang ada.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://images.unsplash.com/photo-1565562141896-9e2423ad19b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="office content 1">
                <img class="mt-4 w-full rounded-lg lg:mt-10" src="https://images.unsplash.com/photo-1581079288675-16bf8157bc10?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="office content 2">
            </div>
        </div>
    </section>

    <section  class="bg-gradient-to-b from-white via-blue-100 to-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl flex flex-col  sm:py-16 lg:px-6">
            <div class="mb-8 max-w-screen-md self-center text-center lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 ">Produk Artivity</h2>
                <p class="text-gray-500 sm:text-xl ">Keunggulan dan pelayanan prima dari Artivity untuk kepuasan pelanggan setia</p>
            </div>
            <div id="produk" class=" grid grid-cols-1 md:grid-cols-4 gap-6">

                <div class="max-w-sm bg-white border rounded-xl shadow">
                    <a href="#">
                        <img class="rounded-t-xl" src="{{ asset('images/product/brands-people-0adHvNJu-Zo-unsplash.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cetak buku</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Melayani pencetakan buku satuan</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 transition ease-in-out hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50  text-center mr-2 mb-2 rounded-lg hover:bg-blue-600 ">
                            Pesan
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border rounded-xl shadow">
                    <a href="#">
                        <img class="rounded-t-xl" src="{{ asset('images/product/brands-people-0adHvNJu-Zo-unsplash.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cetak buku</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Melayani pencetakan buku satuan</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 transition ease-in-out hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50  text-center mr-2 mb-2 rounded-lg hover:bg-blue-600 ">
                            Pesan
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border rounded-xl shadow">
                    <a href="#">
                        <img class="rounded-t-xl" src="{{ asset('images/product/brands-people-0adHvNJu-Zo-unsplash.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cetak buku</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Melayani pencetakan buku satuan</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 transition ease-in-out hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50  text-center mr-2 mb-2 rounded-lg hover:bg-blue-600 ">
                            Pesan
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border rounded-xl shadow">
                    <a href="#">
                        <img class="rounded-t-xl" src="{{ asset('images/product/brands-people-0adHvNJu-Zo-unsplash.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cetak buku</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Melayani pencetakan buku satuan</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 transition ease-in-out hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50  text-center mr-2 mb-2 rounded-lg hover:bg-blue-600 ">
                            Pesan
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h2 class="mb-8 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 lg:mb-16  md:text-4xl">Powered By</h2>
            <div class="grid grid-cols-2 gap-8 justify-evenly text-gray-500 sm:gap-12 md:grid-cols-2 lg:grid-cols-4 ">
                <a href="#" class="flex justify-center items-center">
                    <img class="w-40" src="{{ asset('images/powered-by/kisspng-logo-konica-minolta-printer-plotter-repair-and-it-maintenance-dallas-ccsi-5b6c32bde9c923.3760057615338175339576.png') }}" alt="Konica Minolta">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img class="w-40" src="{{ asset('images/powered-by/pngwing.com.png') }}" alt="Fuji Xerox">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img class="w-40" src="{{ asset('images/powered-by/logo-ir-1.png') }}" alt="Canon">
                </a>

                <a href="#" class="flex justify-center items-center">
                    <img class="w-40" src="{{ asset('images/powered-by/Epson-symbol.png') }}" alt="Epson">
                </a>
            </div>
        </div>
    </section>
@endsection
