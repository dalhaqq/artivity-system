<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrintOrder;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PrintPayment extends Component
{
    use WithFileUploads;
    public $printPayment, $filePayment;

    public function mount($printPayment) {
        $this->printPayment = $printPayment;
    }

    public function render()
    {
        return view('livewire.print-payment');
    }

    
    public function savePrintOrder(){
        $this->filePaymentValidation();
        $uploadDate = now()->format('Ymd_His');
        $extension = $this->filePayment->extension();
        $filePaymentName = "print_payment_" . Auth::user()->id . "_" . $uploadDate . '.' . $extension;
        Storage::disk('public')->putFileAs('payment_print_order', $this->filePayment, $filePaymentName);
        
        $filePrint = $this->printPayment['filepath'];
        $filePrintName = Auth::user()->id.'-'.Auth::user()->name.'-'.$uploadDate.'-'.'x'.$this->printPayment['jml_copy'].'-'.$this->printPayment['filename'];
        
        rename($filePrint, public_path('storage/file_print_order'.'/'.$filePrintName));

        PrintOrder::create([
            'no_pemesanan'         => 'AR-0'.Auth::user()->id.'/PRINT/'.$uploadDate,
            'buyers_id'            => Auth::user()->id,
            'order_status_id'      => 1,
            'jenis_kertas'         => $this->printPayment['jenis_kertas'] ,
            'jenis_cetak'          => $this->printPayment['jenisCetak'] ,
            'jml_copy'             => $this->printPayment['jml_copy'] ,
            'jml_halaman'          => $this->printPayment['page'] ,
            'two_side'             => $this->printPayment['jml_sisi'] == 2 ? TRUE : FALSE ,
            'harga'                => $this->printPayment['pricetopay'] ,
            'catatan'              => $this->printPayment['description'],
            'bukti_bayar'          => $filePaymentName,
            'file'                 => $filePrintName
        ]);

        session()->flash('berhasil', 'Melakukan Print Order!');
        return redirect()->to('/my-order');
        
    }

    public function filePaymentValidation() {
        $this->validate(
            [
                'filePayment'              => 'required|mimes:jpeg,png,jpg|max:5048',
            ],
            [
                'filePayment.required'     => 'Tidak ada file foto',
                'filePayment.max'          => 'Ukuran file terlalu besar (max 5mb)',
                'filePayment.mimes'        => 'Format file tidak valid (jpeg, png, jpg, heic)',
            ]
        );
    }
}
