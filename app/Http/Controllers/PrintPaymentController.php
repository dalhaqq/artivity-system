<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrintPaymentController extends Controller
{
    public function payment(Request $request) {
        return view ('pages.print-payment.index',[
            'printPayment' => $request->all()
        ]);
    }
}
