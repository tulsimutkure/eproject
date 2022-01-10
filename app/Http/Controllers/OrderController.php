<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index( )
    {
        $order=Order::all();
        return view('orders.index',compact('order'));
    }
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit',compact('order'));
    }
    public function update($id, Request $request)
    {
        $order =Order::find($id);
        $order->product_id = $request->product_id;
        $order->status = $request->status;
        $order->date = $request->date;
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        $order->tax = $request->tax;
        $order->discount = $request->discount;
        $order->tracking_no = $request->tracking_no;
        $order->update();
        return redirect()->route('orders.index');
    }
    public function delete($id, Request $request)
    {
        $order= Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
