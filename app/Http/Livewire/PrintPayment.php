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
        
        $uploadDate = now()->format('Ymd_His');
        $extension = $this->filePayment->extension();
        $filePaymentName = "print_payment_" . Auth::user()->id . "_" . $uploadDate . '.' . $extension;
        $this->filePayment->storeAs("storage/payment_print_order", $filePaymentName);

        Storage::disk('public')->putFileAs('payment_print_order', $this->filePayment, $filePaymentName);
        Storage::disk('local')->putFileAs('payment_print_order', $this->filePayment, $filePaymentName);
        
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
                'file_payment_path'              => 'required|mimes:jpeg,png,jpg|max:1048',
            ],
            [
                'file_payment_path.required'     => 'Tidak ada file foto',
                'file_payment_path.max'          => 'Ukuran file terlalu besar (max 1mb)',
                'file_payment_path.mimes'        => 'Format file tidak valid (jpeg, png, jpg)',
            ]
        );
    }
}
