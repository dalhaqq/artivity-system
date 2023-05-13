<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Finishing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class MakeOrderController extends Controller
{
    public function makeorder($product){
        try {
            $product = Product::findOrFail($product);
            $bahan = $product->stock;

            return view('pages.buyers.pemesanan', [
                "produk" => $product,
                "bahan" => $bahan
            ]);
        } catch (\Exception $e) {
            return '{
                "metadata":{
                    "status":0,
                    "message":"internal server error"
                }
            }';
        }
    }

    public function store(Request $request){
        $validated = $request->validate([
            'product_id' => 'required | integer',
            'finishing_id' => 'required | integer',
            'material_id' => 'required | integer',
            'price' => 'required | integer',
            'jml_halaman' => 'required | integer',
            'jml_sisi' => 'required | integer',
            'jml_copy' => 'required | integer',
            'metode_pembayaran_id' => 'required | integer',
        ]);
        $validated['buyers_id'] = Auth::user()->id;
        $validated['description'] = $request['description'];
        $validated['order_status_id'] = 1;

        $file = $request->file('file_name');
        $path = $file->store(
            'order/file', 'public'
        );
        $validated['file_name'] = $path;

        $noPemesanan = 'AR-0'.Auth::user()->id.'/'.$request['product_id'].$request['finishing_id'].$request['material_id'].'/'.date("dmY");
        $validated['no_pemesanan'] = $noPemesanan;

        $encrypt = Crypt::encryptString($noPemesanan);

        $order = Order::create($validated);
        if(!$order){
            return 'GAGAL';
        }
        if($request['metode_pembayaran_id'] == 1){
            return redirect()->route('payment', $encrypt);
        }
        if($request['metode_pembayaran_id'] == 2){
            return redirect()->route('payment', $encrypt);
        }
    }

    public function payment($kode){
        $kode = Crypt::decryptString($kode);
        $pesanan = Order::where([
            'buyers_id' => Auth::user()->id,
            'no_pemesanan' => $kode,
        ])->latest()->first();
        if($pesanan->metode_pembayaran_id == 1){
            return view('pages.pembayaran.qris', ['pesanan' => $pesanan]);
        }
        if($pesanan->metode_pembayaran_id == 2){
            return view('pages.pembayaran.transfer', ['pesanan' => $pesanan]);
        }
    }

    public function pay(Order $order, Request $request){
        $file = $request->file('bukti_pembayaran');
        $path = $file->store(
            'order/pembayaran', 'public'
        );
        $data = $path;

        $order->bukti_pembayaran = $data;
        $order->order_status_id = 2;
        $pembayaran = $order->save();
        if(!$pembayaran){
            return redirect()->back()->with('gagal', 'melakukan pembayaran');
        }
        return redirect()->route('my-order')->with('berhasil', 'melakukan pembayaran');
    }

    public function jsondata($id){
        return json_encode(Stock::find($id));
    }
    public function jsonhitung($produk, $kertas, $finishing = 4){
        $kertas = Stock::findOrFail($kertas)->price;
        $produk = Product::findOrFail($produk)->price;
        $finishing = Finishing::findOrFail($finishing)->price;
        $harga = $kertas + $produk + $finishing;
        return json_encode($harga);
    }
}
