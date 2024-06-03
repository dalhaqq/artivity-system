<div>
    <?php
      header("Cache-Control: no cache");
      session_cache_limiter("private_no_expire");
    ?>
    @error('uploadedFile')
    <div class="rounded-md bg-red-50 mb-4 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
            </div>
            <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">There were {{ $this->getErrorBag()->count() }} errors with your submission</h3>
            <div class="mt-2 text-sm text-red-700">
                <ul role="list" class="list-disc space-y-1 pl-5">
                    @foreach ($this->getErrorBag()->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
    </div>
    @enderror
    @if($errorAPI)
    <div class="rounded-md bg-red-50 mb-4 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
            </div>
            <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">Some errors occurred on the server. Please try again in several minutes.</h3>
            </div>
        </div>
    </div>
    @endif

    @if($Price)
    <div class="rounded-md bg-green-50 mb-4 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-semibold text-green-800">Berhasil Menghitung Harga! ({!!$fileName!!})</h3>
                <div class="mt-2 text-sm font-medium text-green-700">
                    <table>
                        <tr>
                            <td>Harga Cetak Berwarna</td>
                            <td>:</td>
                            <td>Rp {{ number_format($Price, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Harga Cetak Hitam Putih</td>
                            <td>:</td>
                            <td>Rp {{ number_format($bwPrice, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="space-y-12">
        <div  class="flex items-center justify-center w-full">
            <label wire:loading.remove wire:target='uploadPdf' for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    @if($uploadedFile)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    @else
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    @endif
                    
                    <p class="mb-2 text-s text-gray-500 dark:text-gray-400"><span class="font-semibold">{{ $uploadedFile ? $uploadedFile->getClientOriginalName() : 'Click to upload file' }}</span></p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $uploadedFile ? 'File ready to calculate' : 'Upload file PDF only (Max 50 MB)' }}</p>
                </div>
                <input accept='.pdf' wire:loading.attr="disabled" wire:model='uploadedFile' id="dropzone-file" type="file" class="hidden" name="uploadedFile">
            </label>
            <label wire:loading.flex wire:target='uploadPdf' class="hidden flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 cursor-progress">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">

                    <span class="animate-spin mr-1 self-center inline-block w-8 h-8 mb-3 border-[5px] border-current border-t-transparent text-gray-500 rounded-full" role="status" aria-label="loading"></span>
                    
                    <p class="mb-2 text-s text-gray-500 dark:text-gray-400"><span class="font-semibold">{{ $uploadedFile ? $uploadedFile->getClientOriginalName() : 'Click to upload file' }}</span></p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $uploadedFile ? 'Calculating file ...' : 'Upload file PDF only (Max 50 MB)' }}</p>
                </div>
            </label>
        </div> 
    </div>

    {{-- @if ($imgPath)
        <div class="grid grid-cols-4 gap-3">
        @foreach ($imgPath as $path)
        <img class="border rounded-lg" width='200' src="{{ URL::asset($path) }}" />
        <img class="border rounded-lg" width='200' src="{{ URL::asset($path) }}" />
        @endforeach
        </div>
    @endif --}}

    <div class="mt-6 flex items-center justify-start md:justify-end gap-x-3">
        <button wire:loading.attr="disabled" wire:target='uploadPdf' wire:click="resetForm" type="button" class="transition ease-in-out inline-flex rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">
            
            <span wire:loading.remove wire:target='resetForm'>Reset</span>

            <span wire:loading.inline-flex wire:target='resetForm' class="items-center"">
                <span class="animate-spin mr-1 self-center inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full" role="status" aria-label="loading"></span>
                Loading...
            </span>
        </button>
        
        @if (!$Price)
        <button wire:loading.attr="disabled" wire:click="uploadPdf" type="button" class="transition ease-in-out inline-flex rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <svg wire:loading.remove wire:target='uploadPdf' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
            </svg>
            <span wire:loading.remove wire:target='uploadPdf'>Prediksi Harga</span>

            <span wire:loading.inline-flex wire:target='uploadPdf' class="items-center"">
                <span class="animate-spin mr-1 self-center inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full" role="status" aria-label="loading"></span>
                Loading...
            </span>
        </button>
        @endif

        @if ($Price != 0)
        <form enctype="multipart/form-data" method="POST" action="{{route('printOrder')}}">
            @csrf
            <input class="hidden" name="bw_price" type="text" value="{{$bwPrice}}">
            <input class="hidden" name="page" type="text" value="{{$totalPage}}">
            <input class="hidden" name="price" type="text" value="{{$Price}}">
            <input class="hidden" name="filename" type="text" value="{{$fileName}}">
            <input class="hidden" type="text" name="path" id="" value="{{$tempFile}}">
            <button type="submit" wire:loading.attr="disabled"
                class="transition ease-in-out inline-flex rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                <svg wire:loading.remove wire:target='uploadPdf' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-5 h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>
                <span wire:loading.remove wire:target='uploadPdf'>Lanjut Pembayaran</span>
            
                <span wire:loading.inline-flex wire:target='uploadPdf' class="items-center"">
                                        <span class=" animate-spin mr-1 self-center inline-block w-4 h-4 border-[3px]
                    border-current border-t-transparent text-white rounded-full" role="status" aria-label="loading"></span>
                Loading...
                </span>
            </button>
        </form>
        @endif

    </div>
</div>
