<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percetakan;

class PagesController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('designerLandingPage', 'index', 'homePercetakan');
    }

    public function index(){
    	return view('welcome');
    }

    public function homePercetakan(){
    	return view('home-percetakan');
    }

    public function designerLandingPage(){

        $percetakan = Percetakan::get();

        return view('home-designer')->with(compact('percetakan'));
    }
}
