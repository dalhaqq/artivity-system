<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrediksiHargaController extends Controller
{
    public function index()
    {
        return view('pages.prediksi-harga.index');
    }
}
