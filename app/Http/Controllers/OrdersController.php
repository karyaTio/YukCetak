<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percetakan;
use App\Order;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:percetakan')->except('show');
    }

    public function index($id){
        $percetakan = Percetakan::find($id);
        $services = $percetakan->services()->get();

        $orders = [];

        $order1 = $services[0]->orders()->orderBy('id', 'desc')->get();
        $order2 = $services[1]->orders()->orderBy('id', 'desc')->get();

        $orders.put($order1);
        $orders.put($order2);

        dd($orders);

        // $tes = $services[0];

        // return view('orders/index')->with(compact('orders', 'tes'));
    }

    public function accept($id){
        $order = Order::find($id);

        $order->status = 'Accepted';

        $order->save();

        return back();
    }

    public function reject($id){
        $order = Order::find($id);

        $order->status = 'Rejected';

        $order->save();

        return back();
    }
}
