<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percetakan;
use App\Design;

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
        $designs = Design::all();

        return view('percetakan/index')->with(compact('designs'));
    }

    public function profil($id){
        
        $percetakan = Percetakan::find($id);
        
        $services = $percetakan->services()->get();

        return view('percetakan/profil')->with(compact('percetakan', 'services'));
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

    public function update(){
        $path = request()->file('attachment')->store('profildesigner');

        $percetakan = Percetakan::find(request()->user()->id());

        $percetakan->name = request()->name;
        $percetakan->phone_number = request()->phone_number;
        $percetakan->city = request()->city;
        $percetakan->address = request()->address;
        $percetakan->about = request()->about;
        $percetakan->attachment = $path;

        $percetakan->save();


        return redirect('/percetakan/profil/' . request()->user()->id());
    }
}
