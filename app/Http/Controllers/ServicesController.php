<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthPercetakan;
use App\Percetakan;
use App\Service;

class ServicesController extends Controller
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

    public function show($id){
        $service = Service::find($id);

        $sizes = $service->sizes()->get();

        $percetakan = $service->percetakan()->first();

        return view('services/show')->with(compact('service', 'sizes', 'percetakan'));
    }

    public function create()
    {
        return view('services/create');
    }

    public function store()
    {
        $percetakanId = request()->user()->id();
        $percetakan = Percetakan::find($percetakanId);

        $services = $percetakan->services()->create([
            'name' => request()->name,
            'finish_time' => request()->finish_time,
            'description' => request()->desc,
            'category' => request()->category,
            'psd' => request()->psd,
            'crl' => request()->crl,
            'ai' => request()->ai
        ]);

        return redirect('percetakan/profil/'. $percetakanId);
    }

    public function edit($id)
    {
        $service = Service::find($id);

        $packets = $service->packets()->get();

        return view('services/edit')->with(compact('service', 'packets'));
    }

    public function update(){
        $service = Service::find(request()->id);

        $service->name = request()->name;
        $service->price = request()->price;
        $service->description = request()->description;
        $service->category = request()->category;

        $service->save();

        return redirect('percetakan/profil/'.request()->user()->id());
    }

    public function destroy(){
        $service = Service::find(request()->id_hapus);

        $service->delete();

        return back();
    }
}
