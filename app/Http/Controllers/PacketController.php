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
        $service = Service::find($id);
        return view('packets.create')->with(compact('service'));
    }

    public function store($id){

        Packet::create([
            'service_id' => $id,
            'name' => request()->name,
            'quantity' => request()->quantity,
            'price' => request()->price,
        ]);

        return redirect('/percetakan/services/'. $id.'/packets/');
    }

    public function destroy(){
        $packet = Packet::find(request()->id_hapus);

        $packet->delete();

        return back();
    }
}