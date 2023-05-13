<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use App\Models\MachineCategory;

class MesinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MachineCategory::All();
        $machine = Machine::All();
        return view('pages.dashboard.mesin', ["data" => $data, "machine" => $machine]);
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
            'machine_categories_id' => 'required',
            'click_count' => 'required|integer|min:0',
            'click_price' => 'required|integer|min:0'
        ]);
        // $data = $request->all();
        // dd($data);
        $mesin = Machine::create($validated);
        if(!$mesin){
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
            'machine_categories_id' => 'required',
            'click_count' => 'required|integer|min:0',
            'click_price' => 'required|integer|min:0'
        ]);
        $Machine = Machine::find($id);
        $Machine->name = $validated->name;
        $Machine->machine_categories_id = $validated->machine_categories_id;
        $Machine->click_count = $validated->click_count;
        $Machine->click_price = $validated->click_price;
        $mesin = $Machine->save();
        if(!$mesin){
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
        $Machine = Machine::find($id);
        $mesin = $Machine->delete();
        if(!$mesin){
            return redirect()->back()->with('gagal', 'menghapus');
        }
        return redirect()->back()->with('berhasil', 'menghapus');
    }

    public function jsondata($id){
        return json_encode(Machine::find($id));
    }
}
