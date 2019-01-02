<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Design;

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
        return view('designer/pesanan-saya');
    }
    public function editProfil()
    {
        return view('designer/edit-profil');
    }
}
