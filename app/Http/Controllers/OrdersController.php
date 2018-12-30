<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percetakan;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:percetakan')->except('show');
    }

    public function index($id){
        $percetakan = Percetakan::find($id);

        $orders = $percetakan->orders()->get();

        return view('orders/index')->with(compact('orders'));
    }
}
