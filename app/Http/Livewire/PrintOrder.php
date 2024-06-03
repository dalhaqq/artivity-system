<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintOrder extends Component
{
    public $printOrder, $jumlahCopy=1, $totalHarga, $jenisCetak='warna', $harga;

    public function mount($printOrder) {
        $this->printOrder = $printOrder;
    }

    public function incjumlahCopy(){
        $this->jumlahCopy = $this->jumlahCopy+1;
        $this->calculateTotalHarga();
    }

    public function decjumlahCopy(){
        if($this->jumlahCopy > 1){
            $this->jumlahCopy = $this->jumlahCopy-1;
        }
        $this->calculateTotalHarga();
    }

    public function calculateTotalHarga(){
        if(empty($this->jumlahCopy)){
            $this->jumlahCopy = 1;
        }
        $this->totalHarga = $this->harga * $this->jumlahCopy;
    }

    public function cekJenisCetak(){
        if($this->jenisCetak == 'bw'){
           $this->harga = $this->printOrder['bw_price'];
        }
        if($this->jenisCetak == 'warna'){
           $this->harga = $this->printOrder['price'];
        }
    }

    public function render()
    {
        $this->cekJenisCetak();
        $this->calculateTotalHarga();
        return view('livewire.print-order');
    }
}
