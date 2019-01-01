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

        $orders = $services[0]->orders()->get();

        $tes = $services[0];

        return view('orders/index')->with(compact('orders', 'tes'));
    }
}
