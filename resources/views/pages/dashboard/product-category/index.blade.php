<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <div class="relative bg-indigo-200 p-4 sm:p-6 rounded-xl overflow-hidden mb-8">

            <!-- Background illustration -->
            <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z" />
                        <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z" />
                        <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z" />
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%" />
                            <stop stop-color="#818CF8" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                            <stop stop-color="#4338CA" offset="0%" />
                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%" />
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <mask id="welcome-d" fill="#fff">
                                <use xlink:href="#welcome-a" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-a" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z" />
                        </g>
                        <g transform="rotate(-51 91.324 -105.372)">
                            <mask id="welcome-f" fill="#fff">
                                <use xlink:href="#welcome-e" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-e" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z" />
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g" />
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g" />
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z" />
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Content -->
            <div class="relative">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Kategori Produk</h1>
                <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        Dashboard
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ route('manage-product.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Produk</a>
                    </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Kategori Produk</span>
                    </div>
                    </li>
                </ol>
                </nav>
            </div>

        </div>
        <!-- Welcome banner -->

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Card (FORMULIR)   -->
            <div class="h-fit col-span-full xl:col-span-6 bg-white shadow-lg rounded-xl border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800 judul"><i class="fa-solid fa-plus"></i> Tambah Kategori Produk</h2>
                </header>
                <div class="px-5 py-3">
                    <div class="flex items-start">
                        <div class="judulform text-3xl font-bold text-gray-800 mb-3">Input Kategori Produk</div>
                    </div>
                    @if (session()->has('berhasil'))
                    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            berhasil <span class="font-bold">{{ session('berhasil') }}</span> data kategori produk.
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    @endif
                    <form class="forminputdata" action="{{ route('category-product.store') }}" method="post">
                        @csrf
                        <div class="flex flex-col mb-3">
                            <x-jet-label for="category" value="{{ __('Kategori Produk') }}" />
                            <x-jet-input placeholder="Apa kategori baru yang ingin anda tambahkan?" id="category" type="text" name="category" :value="old('category')" required autofocus />
                        </div>
                        <div class="flex justify-end gap-2">
                            <button class="btn bg-slate-500 hover:bg-slate-600 text-white tombolreset" type="reset">Reset</button>
                            <button class="btn bg-blue-500 hover:bg-blue-600 text-white tomboltambah" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Card (FORMULIR)   -->

            <!-- Card (Kategori Produk)  -->
            <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-xl border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Data Kategori Produk</h2>
                </header>
                <div class="p-3">

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table id="myTable" class="table-auto w-full">
                            <!-- Table header -->
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left cursor-pointer">No</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left cursor-pointer">Nama Kategori</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center cursor-pointer">Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="text-sm divide-y divide-gray-100">
                                <?php $i=1?>
                                @foreach ($data as $category)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $i }}</div>
                                        </td>

                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $category->category }}</div>
                                        </td>

                                        <td class="p-2 whitespace-nowrap flex justify-center gap-2">
                                            <button data-idcategory="{{ $category->id }}" class="editkategori text-gray-800 btn bg-yellow-300 hover:bg-yellow-400"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button data-idcategory="{{ $category->id }}"data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"class="hapuskategori text-gray-800 btn bg-red-300 hover:bg-red-400"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php $i++?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Card (STOCK)  -->

        </div>

    </div>

    <!-- MODAL -->
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete this product?</h3>
                    <form class="formhapus" method="post" action="{{ route('category-product.destroy', 1) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No, cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->

    <script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('.hapuskategori').on('click', function(){
                    const id = $(this).data('idcategory');
                    $('form.formhapus').attr('action', '{{ env('APP.URL') }}'+'category-product/' +id )
                });
        });

        $(function(){
            $('.editkategori').on('click', function(){
                const id = $(this).data('idcategory');
                $('.judulform').html('Edit Kategori Produk')
                $('.judul').html('Edit Kategori Produk')
                $('.tomboltambah').html('Edit')
                $('.tombolreset').html('Cancel')
                $('.tombolreset').on('click', function(){
                    location.reload()
                })
                $('.tomboltambah').attr('class', 'btn bg-yellow-300 hover:bg-yellow-400 text-black tomboltambah')
                $('.forminputdata').attr('action', '{{ env('APP.URL') }}'+'category-product/' +id)
                $('.forminputdata').prepend('{{ method_field('PUT') }}')

                $.ajax({
                    url: '{{ env('APP.URL') }}'+'jsonkategori/'+id,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('#category').val(data.category)
                    }
                });
            });
        });
    </script>

</x-app-layout>
