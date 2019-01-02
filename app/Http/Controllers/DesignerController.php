<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

        return view('designer/profil')->with(compact('designer'));
    }

    public function pesananSaya()
    {
        return view('designer/pesanan-saya');
    }
}
