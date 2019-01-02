<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;

class DesignController extends Controller
{
    
    public function create(){
        $path = request()->file('attachment')->store('design');

        Design::create([
            'user_id' =>request()->user()->id(),
            'title' => request()->title,
            'attachment' => $path
        ]);

        return back();
    }
}
