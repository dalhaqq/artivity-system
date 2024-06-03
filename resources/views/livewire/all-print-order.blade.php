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
        <div class="flex flex-none items-center gap-x-2">
            <button wire:click='detailPrintOrder(({{$row->id}}))' type="button"
                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 block">Detail
                Pesanan
            </button>
            @if ($row->status->id == 2)
            <button wire:click='doneOrder(({{$row->id}}))' type="button"
                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 block">
                Selesai
            </button>
            @endif
        </div>
    </li>
    @endforeach
    @include('pages.landing.printordermodal')
    @include('pages.landing.accordermodal')
    @include('pages.landing.cancelordermodal')
    @include('pages.landing.paymentordermodal')

    <script>
        window.addEventListener('myModal', function (overlayValue) {
            var modalElement = document.querySelector('[data-modal-target="' + overlayValue.detail.nama_modal + '"]');
            if (modalElement) {
                modalElement.click();
            }
        });
        window.addEventListener('closeModal', function (overlayValue) {
            var modalElement = document.querySelector('[data-modal-hide="' + overlayValue.detail.nama_modal + '"]');
            if (modalElement) {
            modalElement.click();
            }
        });
    </script>
</div>