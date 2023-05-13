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
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Edit Produk</h1>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Edit Produk</span>
                    </div>
                    </li>
                </ol>
                </nav>
            </div>

        </div>
        <!-- Welcome banner -->

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Card (STOCK)  -->
            <div class="col-span-full xl:col-span-12 bg-white shadow-lg rounded-xl border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Edit Produk</h2>
                </header>
                <div class="p-3">
                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <form action="{{ route('manage-product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="name" class="block mb-3 font-medium text-gray-700 text-md">Nama Produk</label>

                                            <input placeholder="Produk apa yang ingin kamu tambahkan?" type="text" name="name" id="name" autocomplete="name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" value="{{ $product->name }}" required>

                                            @if ($errors->has('name'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="price" class="block mb-3 font-medium text-gray-700 text-md">Harga</label>

                                            <input placeholder="Berapa harga yang ingin kamu tawarkan?" type="text" name="price" id="price" autocomplete="price" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" value="{{ $product->price }}" required>

                                            @if ($errors->has('price'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('price') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">

                                            <label for="description" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Produk</label>

                                            <input placeholder="Jelaskan produk apa yang kamu tambahkan?" type="text" name="description" id="description" autocomplete="description" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" value="{{ $product->description }}" required>

                                            @if ($errors->has('description'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">

                                            <label for="kategori" class="block mb-2 font-medium text-gray-700 text-md">Kategori Produk</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Termasuk kedalam kategori apa?
                                            </p>
                                            @foreach ($product->kategori as $kategoriproduct)
                                            <select id="kategori" name="kategori[]" autocomplete="kategori" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $kategori)
                                                <option value="{{ $kategori->id }}" @if ($kategoriproduct->id == $kategori->id)
                                                selected
                                                @endif>{{ $kategori->category }}</option>
                                                @endforeach
                                            </select>
                                            @endforeach

                                            @if ($errors->has('kategori'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('kategori') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="kertas" class="block mb-2 font-medium text-gray-700 text-md">Kertas Produksi</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Dapat menggunakan kertas apa?
                                            </p>
                                            <div id="newPaperRow">
                                            @foreach ($product->stock as $stock)
                                            <select id="kertas" name="kertas[]" autocomplete="kertas" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Kertas</option>
                                                @foreach ($papers as $paper)
                                                <option value="{{ $paper->id }}" @if ($stock->id == $paper->id)
                                                selected
                                                @endif>{{ $paper->name }}</option>
                                                @endforeach
                                            </select>
                                            @endforeach
                                            @if ($errors->has('paper'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('paper') }}</p>
                                            @endif
                                            </div>
                                            <div id="newPaperRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addPaperRow">
                                                Tambahkan Kertas +
                                            </button>
                                            <button type="button" class=" inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="removePaperRow">
                                                Hapus
                                            </button>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="advantage-service" class="block mb-2 font-medium text-gray-700 text-md">Finishing Produk</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Dapat menggunakan finishing apa?
                                            </p>
                                            <div id="newFinishingRow">
                                            @foreach ($product->finishing as $finishingproduct)
                                            <select id="finishing" name="finishing[]" autocomplete="finishing" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Finishing</option>
                                                @foreach ($finishing as $finishings)
                                                <option value="{{ $finishings->id }}" @if ( $finishings->id==$finishingproduct->id)
                                                selected
                                                @endif>{{ $finishings->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('finishing'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('finishing') }}</p>
                                            @endif
                                            @endforeach
                                            </div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addFinishingRow">
                                                Tambahkan Finishing +
                                            </button>
                                            <button type="button" class=" inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="removeFinishingRow">
                                                Hapus
                                            </button>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="picture[]" class="block mb-3 font-medium text-gray-700 text-md">Foto Produk</label>

                                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mb-3">
                                                @foreach ($product->picture as $picture)
                                                <div class="flex flex-col p-2 pb-6 gap-2 border border-gray-300 rounded-lg">
                                                    <img src="{{ Storage::url($picture->picture_file) }}" class="rounded-lg" alt="...">
                                                    <span class="flex justify-end">
                                                        <span data-idfoto="{{ $picture->id }}"data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-red-500 btn btn-sm bg-red-200 hover:bg-red-300 hover:text-red-600 hapusfoto cursor-pointer"><i class="fa-regular fa-trash-can"></i>&nbsp;&nbsp;Hapus</span>
                                                    </span>
                                                </div>
                                                @endforeach
                                            </div>

                                            <input name="picture[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="multiple_files" type="file" multiple>

                                            @if ($errors->has('picture[]'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('thumbnail') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="video[]" class="block mb-3 font-medium text-gray-700 text-md">Video Produk</label>

                                            <input name="video[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="multiple_files" type="file" multiple>

                                            @if ($errors->has('video[]'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('thumbnail') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{ route('manage-product.index') }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-yellow-900 bg-yellow-300 border border-transparent rounded-lg shadow-sm hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-200" onclick="return confirm('Are you sure want to submit this data ?')">
                                        Edit Produk
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Card (STOCK)  -->

        </div>

    </div>

    <!-- MODAL -->
    <!-- MODAL HAPUS -->
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah anda yakin untuk menghapus foto produk?</h3>
                    <form class="formhapus" method="post" action="{{ route('mesin.destroy', 5) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yakin
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL HAPUS -->
    <!-- MODAL -->

    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            $('.hapusfoto').on('click', function(){
                    const id = $(this).data('idfoto');
                    $('form.formhapus').attr('action', window.location.origin+'/hapus-foto-produk/' +id )
                });
        });
    </script>

    <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html += '<h1>OK</h1>';
            $('#newAdvantagesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>

    <!-- Finishing -->
    <script type="text/javascript">
        // add row
        $("#addFinishingRow").click(function() {
            var html = '';
            html += '<select id="finishing" name="finishing[]" autocomplete="finishing" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><option value="">Pilih Finishing</option> @foreach ($pinishing as $finishing) <option value="{{ $finishing->id }}">{{ $finishing->name }}</option>@endforeach</select>';
            $('#newFinishingRow').append(html);
        });
        $("#addPaperRow").click(function() {
            var html = '';
            html += '<select id="kertas" name="kertas[]" autocomplete="kertas" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><option value="">Pilih Kertas</option> @foreach ($papers as $paper)<option value="{{ $paper->id }}">{{ $paper->name }}</option>@endforeach</select>';

            $('#newPaperRow').append(html);
        });
        // remove row
        $(document).on('click', '#removeFinishingRow', function() {
            $('#newFinishingRow').children('select:last').remove();
        });
        $(document).on('click', '#removePaperRow', function() {
            $('#newPaperRow').children('select:last').remove();
        });
    </script>
    <!-- Finishing -->

    <script type="text/javascript">
        // add row
        $("#addTaglineRow").click(function() {
            var html = '';
            html += '<input placeholder="Tagline" type="text" name="tagline[]" id="tagline" autocomplete="tagline" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" required>';

            $('#newTaglineRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>

    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan 3" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm  sm:text-sm" required>';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
    </script>

</x-app-layout>
