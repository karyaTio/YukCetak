<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percetakan;

class PercetakanController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('percetakan/index');
    }

    public function profil($id){
        
        $percetakan = Percetakan::find($id);
        
        $services = $percetakan->services()->get();

        return view('percetakan/profil')->with(compact('services'));
    }

    public function show($id){
        $percetakan = Percetakan::find($id);
        
        $services = $percetakan->services()->get();

        return view('percetakan/show')->with(compact('services'));
    }

    public function editProfil()
    {
        return view('percetakan/edit-profil');
    }
}
