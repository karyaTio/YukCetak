<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Design;
use App\Service;

class DesignerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $designer = User::find($id);

        $designs = $designer->designs()->get();

        return view('designer/profil')->with(compact('designer', 'designs'));
    }

    public function pesananSaya()
    {
        $designer = User::find(request()->user()->id());

        $orders = $designer->orders()->get();

        $services = collect();
        
        for($i = 0; $i<count($orders); $i++){
            $services->push(Service::find($orders[$i]->service_id));
        }

        return view('designer/pesanan-saya')->with(compact('orders', 'services'));
    }
    public function editProfil()
    {
        return view('designer/edit-profil');
    }
}
