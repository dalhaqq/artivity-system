<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stock;
use App\Models\DataFeed;
use Illuminate\Http\Request;
use App\Models\StockCategory;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = StockCategory::All();
        $stock = Stock::All();
        return view('pages.dashboard.stock', ["categories" => $category, "stocks" => $stock]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'material_categories_id' => 'required',
            'merk' => 'required',
            'jumlah' => 'required|integer|min:0',
            'price' => 'required|integer|min:0'
        ]);

        $validated['description'] = $request->description;
        // dd($data);
        $Stock = Stock::create($validated);
        if(!$Stock){
            return redirect()->back()->with('gagal', 'menambah');
        }
        return redirect()->back()->with('berhasil', 'menambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'material_categories_id' => 'required',
            'merk' => 'required',
            'jumlah' => 'required|integer|min:0',
            'price' => 'required|integer|min:0'
        ]);

        $validated['description'] = $request->description;

        $Stock = Stock::find($id);
        $Stock->name = $validated['name'];
        $Stock->material_categories_id = $validated['material_categories_id'];
        $Stock->merk = $validated['merk'];
        $Stock->description = $validated['description'];
        $Stock->jumlah = $validated['jumlah'];
        $Stock->price = $validated['price'];
        $Stock->save();
        if(!$Stock){
            return redirect()->back()->with('gagal', 'mengubah');
        }
        return redirect()->back()->with('berhasil', 'mengubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Stock = Stock::find($id);
        $Stock->delete();
        if(!$Stock){
            return redirect()->back()->with('gagal', 'menghapus');
        }
        return redirect()->back()->with('berhasil', 'menghapus');
    }
    public function jsondata($id){
        return json_encode(Stock::find($id));
    }
}
