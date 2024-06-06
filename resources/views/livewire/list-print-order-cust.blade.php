<div>
    @foreach ($printOrder as $row)
    <li class="flex items-center justify-between gap-x-6 py-5">
        <div class="min-w-0">
            <div class="flex items-start gap-x-3">
                <p class="text-sm font-semibold leading-6 text-gray-900">Cetak Dokumen</p>
                <p
                    class="rounded-md whitespace-nowrap mt-0.5 px-1.5 py-0.5 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">
                    {{ $row->status->name }}</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                <p class="whitespace-nowrap">{{ $row->no_pemesanan }}</p>
                <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 fill-current">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <p class="truncate">{{ $row->buyers->name }}</p>
            </div>
        </div>
        <div class="flex flex-none items-center gap-x-4">
            <button wire:click='detailPrintOrder(({{$row->id}}))' type="button"
                class="rounded-full bg-white p-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 block sm:hidden">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                </svg>
            </button>
            <button data-modal-target="printOrderCust" data-modal-toggle="printOrderCust" type="button"class="hidden"></button>
            <button wire:click='detailPrintOrder(({{$row->id}}))' type="button"
                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 hidden sm:block">Detail
                Pesanan</button>
            <button data-modal-target="printOrderCust" data-modal-toggle="printOrderCust" type="button"class="hidden"></button>
        </div>
    </li>
    @endforeach
    @include('pages.landing.cust-printordermodal')

    <script>
        window.addEventListener('myModal', function (overlayValue) {
        var modalElement = document.querySelector('[data-modal-target="' + overlayValue.detail.nama_modal + '"]');
        if (modalElement) {
            modalElement.click();
        }
    });
    </script>
</div>
