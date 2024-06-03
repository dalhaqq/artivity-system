<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PrintOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.order', [
            'order' => Order::all(),
            'print' => PrintOrder::all()
        ]);
    }

    public function myOrder()
    {
        return view('pages.dashboard.myorder', [
            'order' => Order::where('buyers_id', Auth::user()->id)->get(),
            'printorder' => PrintOrder::where('buyers_id', Auth::user()->id)->get()
        ]);
    }

    public function orderditerima()
    {
        return view('pages.dashboard.acceptedorder', [
            'order' => Order::where('order_status_id',3)->get()
        ]);
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
        //
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

    public function jsondata($id){
        $order = Order::find($id);
        $data['order'] = $order;
        $data['buyer'] = $order->buyers;
        $data['product'] = $order->product;
        $data['finishing'] = $order->finishing;
        $data['material'] = $order->material;
        $data['status'] = $order->status;
        $data['payment'] = $order->payment;

        return json_encode($data['order']);
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

    public function tolak($id){
        $order = Order::find($id);
        $order->order_status_id = 5;
        $order->save();
        return redirect()->back();
    }

    public function selesai($id){
        $order = Order::find($id);
        $order->order_status_id = 4;
        $order->save();
        return redirect()->back();
    }

    public function terima($id){
        $order = Order::find($id);
        $order->order_status_id = 3;
        $order->save();
        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
