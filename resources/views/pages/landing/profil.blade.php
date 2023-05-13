@extends('layouts.landing')

@section('title', 'Profile')

@section('content')

    <section class="bg-white dark:bg-gray-900 min-h-screen">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:py-16 lg:px-6">

            <div id="controls-carousel" class="relative w-full z-0" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative aspect-w-16 aspect-h-4 overflow-hidden rounded-xl md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/product/produk-page-header/hero-1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('images/product/produk-page-header/hero-2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/product/produk-page-header/hero-3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/product/produk-page-header/hero-4.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/product/produk-page-header/hero-5.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Profil Artivity</h2>
                <p class="mb-4"> Sebagai perusahaan digital printing yang berbasis di Purwokerto, kami bangga dapat melayani komunitas lokal dengan layanan cetak berkualitas tinggi. Tim desainer dan ahli cetak kami yang berpengalaman memiliki pemahaman mendalam tentang pasar lokal dan dapat memberikan solusi personalisasi yang sesuai dengan kebutuhan unik para klien kami.</p>
                <p class="mb-4"> Kami menggunakan teknologi terbaru dan peralatan berteknologi tinggi untuk menghasilkan cetakan yang indah, tajam, dan tahan lama. Baik Anda membutuhkan kartu nama, flyer, spanduk, atau bahan pemasaran lainnya, kami memiliki keahlian dan sumber daya untuk memberikan hasil yang luar biasa.</p>
                <p class="mb-4"> Di perusahaan digital printing kami, kami memahami pentingnya tetap bersaing di pasar Purwokerto. Oleh karena itu, kami menawarkan harga yang kompetitif tanpa mengorbankan kualitas. Perhatian kami terhadap detail dan dedikasi kami terhadap kepuasan pelanggan membuat kami menjadi pilihan utama bagi individu dan bisnis.</p>
                <p class="mb-4"> Kami berkomitmen untuk memberikan layanan yang luar biasa kepada komunitas lokal kami di Purwokerto dan bangga menjadi bagian dari lanskap bisnis lokal yang berkembang pesat. Hubungi kami hari ini untuk mempelajari lebih lanjut tentang bagaimana kami dapat membantu meningkatkan merek Anda ke level berikutnya dengan layanan cetak digital kami.</p>
                <b>Why Artivity? Because art is our activity</b>
            </div>
        </div>
    </section>

@endsection
