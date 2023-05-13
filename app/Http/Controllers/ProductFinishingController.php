<?php

namespace App\Http\Controllers;

use App\Models\Finishing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductFinishingController extends Controller
{
    public function index(){
        $data = Finishing::All();

        return view('pages.dashboard.product-finishing.index',["data" => $data]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $service = Finishing::create($data);
        if(!$service){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return redirect()->back()->with('berhasil', 'menambah');
    }
    public function destroy($id)
    {
        $Finishing = Finishing::find($id);
        $Finishing->delete();
        return redirect()->back()->with('berhasil', 'menghapus');
    }
    public function jsondata($id){
        return json_encode(Finishing::find($id));
    }
    public function update(Request $request, $id)
    {
        $Finishing = Finishing::find($id);
        $Finishing->name = $request->name;
        $Finishing->description = $request->description;
        $Finishing->price = $request->price;
        $Finishing->save();
        return redirect()->back()->with('berhasil', 'mengubah');
    }
}
