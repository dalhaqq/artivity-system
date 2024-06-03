<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrintOrder;

class AllPrintOrder extends Component
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
    ,$Updated_at
    ,$orderID;
    
    public function myModal($overlayValue, $id = null) {
        $this->resetvalidation();
        $this->id_param = $id;
        $this->dispatchBrowserEvent('myModal', [
            'nama_modal'=>$overlayValue,
            'id'        => $id
        ]);
    }
    
    public function closeModal($overlayValue, $id = null) {
        $this->resetvalidation();
        $this->id_param = $id;
        $this->dispatchBrowserEvent('closeModal', [
            'nama_modal'=>$overlayValue,
            'id'        => $id
        ]);
    }

    public function modalCancelOrder(){
        $this->closeModal('printOrderAdmin');
        $this->myModal('cancelOrderAdmin');
    }

    public function modalAcceptOrder(){
        $this->closeModal('printOrderAdmin');
        $this->myModal('accOrderAdmin');
    }

    public function modalPayment(){
        $this->closeModal('printOrderAdmin');
        $this->myModal('paymentOrderAdmin');
    }

    public function cancelOrder(){
        $detailOrder = PrintOrder::find($this->orderID);
        $detailOrder->order_status_id = 4;
        $detailOrder->save();
    }

    public function acceptOrder(){
        $detailOrder = PrintOrder::find($this->orderID);
        $detailOrder->order_status_id = 2;
        $detailOrder->save();
    }

    public function doneOrder($id){
        $detailOrder = PrintOrder::find($id);
        $detailOrder->order_status_id = 3;
        $detailOrder->save();
    }

    public function detailPrintOrder($id){
        $this->orderID = $id;
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

        $this->myModal('printOrderAdmin');
    }

    public function render()
    {
        $this->printOrder =  PrintOrder::all();
        return view('livewire.all-print-order');
    }
}
