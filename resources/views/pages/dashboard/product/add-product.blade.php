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
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Input Produk</h1>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Input Produk</span>
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
                    <h2 class="font-semibold text-gray-800">Tambah Produk</h2>
                </header>
                <div class="p-3">
                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <form action="{{ route('manage-product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="name" class="block mb-3 font-medium text-gray-700 text-md">Nama Produk</label>

                                            <input placeholder="Produk apa yang ingin kamu tambahkan?" type="text" name="name" id="name" autocomplete="name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" value="{{ old('name') }}" required>

                                            @if ($errors->has('name'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="price" class="block mb-3 font-medium text-gray-700 text-md">Harga</label>

                                            <div class="relative">
                                                <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-300 text-sm">Rp.</span>
                                                <input placeholder="Berapa harga yang ingin kamu tawarkan?" type="number" name="price" id="price" autocomplete="price" class="block w-full py-3 pl-8 mt-1 border-gray-300 rounded-md shadow-sm sm:text-sm" value="{{ old('price') }}" required inputmode="numeric">
                                            </div>

                                            @if ($errors->has('price'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>


                                        <div class="col-span-6">

                                            <label for="description" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Produk</label>

                                            <input placeholder="Jelaskan produk apa yang kamu tambahkan?" type="text" name="description" id="description" autocomplete="description" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm  sm:text-sm" value="{{ old('description') }}" required>

                                            @if ($errors->has('description'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="kategori" class="block mb-2 font-medium text-gray-700 text-md">Kategori Produk</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Termasuk kedalam kategori apa?
                                            </p>

                                            <select required id="kategori" name="kategori[]" autocomplete="kategori" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->category }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('kategori'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('kategori') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="kertas" class="block mb-2 font-medium text-gray-700 text-md">Kertas Produksi</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Dapat menggunakan kertas apa?
                                            </p>

                                            <select required id="kertas" name="kertas[]" autocomplete="kertas" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Kertas</option>
                                                @foreach ($papers as $paper)
                                                <option value="{{ $paper->id }}">{{ $paper->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('paper'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('paper') }}</p>
                                            @endif

                                            <div id="newPaperRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addPaperRow">
                                                Tambahkan Kertas +
                                            </button>
                                            <button type="button" class="hidden inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="removePaperRow">
                                                Hapus
                                            </button>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="advantage-service" class="block mb-2 font-medium text-gray-700 text-md">Finishing Produk</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Dapat menggunakan finishing apa?
                                            </p>

                                            <select required id="finishing" name="finishing[]" autocomplete="finishing" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Finishing</option>
                                                @foreach ($finishings as $finishing)
                                                <option value="{{ $finishing->id }}" @if ($finishing->id == 1)
                                                selected
                                                @endif>{{ $finishing->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('finishing'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('finishing') }}</p>
                                            @endif

                                            <div id="newFinishingRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addFinishingRow">
                                                Tambahkan Finishing +
                                            </button>
                                            <button type="button" class="hidden inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="removeFinishingRow">
                                                Hapus
                                            </button>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="picture[]" class="block mb-3 font-medium text-gray-700 text-md">Foto Produk</label>

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

                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="return confirm('Are you sure want to submit this data ?')">
                                        Tambah Produk
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

    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

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
            html += '<select required id="finishing" name="finishing[]" autocomplete="finishing" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><option value="">Pilih Finishing</option> @foreach ($finishings as $finishing)<option value="{{ $finishing->id }}">{{ $finishing->name }}</option>@endforeach</select>';

            $('#newFinishingRow').append(html);

            if ( $('#newFinishingRow').children().length ) {
                $('#removeFinishingRow').show();
            }else{
                $('#removeFinishingRow').hide();
            }
        });
        // remove row
        $(document).on('click', '#removeFinishingRow', function() {
            $('#newFinishingRow').children('select:last').remove();
            if ( $('#newFinishingRow').children().length ) {
                $('#removeFinishingRow').show();
            }else{
                $('#removeFinishingRow').hide();
            }
        });
    </script>
    <!-- Finishing -->

    <!-- KERTAS -->
    <script type="text/javascript">
        // add row
        $("#addPaperRow").click(function() {
            var html = '';
            html += '<select required id="kertas" name="kertas[]" autocomplete="kertas" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><option value="">Pilih Kertas</option> @foreach ($papers as $paper)<option value="{{ $paper->id }}">{{ $paper->name }}</option>@endforeach</select>';

            $('#newPaperRow').append(html);

            if ( $('#newPaperRow').children().length ) {
                $('#removePaperRow').show();
            }else{
                $('#removePaperRow').hide();
            }
        });
        // remove row
        $(document).on('click', '#removePaperRow', function() {
            $('#newPaperRow').children('select:last').remove();
            if ( $('#newPaperRow').children().length ) {
                $('#removePaperRow').show();
            }else{
                $('#removePaperRow').hide();
            }
        });
    </script>
    <!-- KERTAS -->

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
