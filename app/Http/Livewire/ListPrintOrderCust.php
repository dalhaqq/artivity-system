<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrintOrder;
use Illuminate\Support\Facades\Auth;

class ListPrintOrderCust extends Component
{
    public $printOrder
    ,$No_pemesanan
    ,$Buyers_name
    ,$Order_status_id
    ,$Jenis_kertas
    ,$Jenis_cetak
    ,$Jml_copy
    ,$Jml_halaman
    ,$Two_side
    ,$File
    ,$Harga
    ,$Bukti_bayar
    ,$Catatan
    ,$Created_at
    ,$Updated_at;
    
    public function myModal($overlayValue, $id = null) {
        $this->resetvalidation();
        $this->id_param = $id;
        $this->dispatchBrowserEvent('myModal', [
            'nama_modal'=>$overlayValue,
            'id'        => $id
        ]);
    }

    public function detailPrintOrder($id){
        $detailOrder = PrintOrder::find($id);
    
        $this->No_pemesanan       =  $detailOrder->no_pemesanan ;
        $this->Buyers_name        =  $detailOrder->buyers->name ;
        $this->Order_status_id    =  $detailOrder->status->name ;
        $this->Jenis_kertas       =  $detailOrder->jenis_kertas ;
        $this->Jenis_cetak        =  $detailOrder->jenis_cetak ;
        $this->Jml_copy           =  $detailOrder->jml_copy ;
        $this->Jml_halaman        =  $detailOrder->jml_halaman ;
        $this->Two_side           =  $detailOrder->two_side ;
        $this->File               =  $detailOrder->file ;
        $this->Harga              =  $detailOrder->harga ;
        $this->Bukti_bayar        =  $detailOrder->bukti_bayar ;
        $this->Catatan            =  $detailOrder->catatan ;
        $this->Created_at         =  $detailOrder->created_at ;
        $this->Updated_at         =  $detailOrder->updated_at ;

        $this->myModal('printOrderCust');
    }

    public function render()
    {
        $this->printOrder =  PrintOrder::where('buyers_id', Auth::user()->id)->get();
        return view('livewire.list-print-order-cust');
    }
}
