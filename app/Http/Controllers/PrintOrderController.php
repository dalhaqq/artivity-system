<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintOrderController extends Controller
{
    public function order (Request $request){
        $printOrder['page'] = $request->page;  
        $printOrder['bw_price'] = $request->bw_price;  
        $printOrder['price'] = $request->price;  
        $printOrder['path'] = $request->path;  
        $printOrder['filename'] = $request->filename;
        return view('pages.print-order.index',[
            'printOrder' => $printOrder,
        ]);
    }
}
