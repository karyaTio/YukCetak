<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignJob;
use App\Percetakan;
use App\Order;

class OrdersDesignerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($id){
        $path = request()->file('attachment')->store('orders');

        Order::create([
            'user_id' => request()->user()->id(),
            'service_id' => $id,
            'quantity' => request()->quantity,
            'delivery_method' => request()->delivery_method,
            'message' => request()->message,
            'attachment' => $path
        ]);

        return back();
    }
}
