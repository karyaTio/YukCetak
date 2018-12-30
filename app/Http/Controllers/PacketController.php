<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Packet;

class PacketController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:percetakan')->except('show');
    }

    public function index($id){
        $service = Service::find($id);

        $packets = $service->packets()->get();

        return view('packets.index')->with(compact('packets', 'service'));
    }

    public function create($id){
        Packet::create([
            'measurement' => request()->measurement,
            'width' => request()->width,
            'height' => request()->height,
            'price' => request()->price,
            'material' => request()->material,
        ]);

        return redirect('/percetakan/services/'. $id.'/packets/');
    }
}