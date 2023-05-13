<div class="h-fit col-span-full xl:col-span-6 bg-white shadow-lg rounded-xl border border-gray-200">
    <header class="px-5 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800"><i class="fa-solid fa-plus"></i> Add New Stock</h2>
    </header>
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-gray-800 mb-3">Input Stock</div>
        </div>
        <form action="">
            <div class="flex flex-col mb-3">
                <x-jet-label for="namaBarang" value="{{ __('Nama barang') }}" />
                <x-jet-input id="namaBarang" type="text" name="namaBarang" :value="old('namaBarang')" required autofocus />
            </div>
            <div class="flex flex-col mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
            <select id="countries" class="form-input w-full">
            <option selected>Pilih kategori</option>
            <option value="US">Kertas cetak</option>
            <option value="CA">Finishing</option>
            <option value="FR">ATK</option>
            <option value="DE">Toner</option>
            </select>
            </div>
            <div class="flex flex-col mb-3">
                <x-jet-label for="jumlah" value="{{ __('Jumlah') }}" />
                <x-jet-input id="jumlah" type="number" name="jumlah" :value="old('jumlah')" required autofocus />
            </div>
            <div class="flex justify-end gap-2">
                <button class="btn bg-slate-500 hover:bg-slate-600 text-white" type="reset">Reset</button>
                <button class="btn bg-blue-500 hover:bg-blue-600 text-white" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
