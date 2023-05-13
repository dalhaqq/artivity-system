  <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-xl border border-gray-200">
    <header class="px-5 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Data Stock</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table id="myTable" class="table-auto w-full">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Nama Barang</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Kategori</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Jumlah</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Action</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-gray-100">
                    @for ($i =1; $i <= 100; $i++)
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">Ivory 210</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">Kertas cetak</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium @if ($i < 50)
                            text-red-500 @endif text-green-500">{{ $i + 10 * $i }}</div>
                        </td>

                        <td class="p-2 whitespace-nowrap flex justify-center gap-2">
                            <button class="text-gray-800 btn bg-yellow-300 hover:bg-yellow-400"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="text-gray-800 btn bg-red-300 hover:bg-red-400"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js') }}"></script>
<script>

    $('#myTable').DataTable( {
    scrollY: 300,
    'bInfo': false,
    paging: false
    } );

    $("[aria-controls='myTable']:first").addClass('form-input ml-2');
    $("label:last").addClass('flex justify-end items-center');
    $("[aria-controls='myTable']:first").attr("placeholder", "Cari barang...");

</script>
