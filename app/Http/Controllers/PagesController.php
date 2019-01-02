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
        $this->middleware('auth')->except('designerLandingPage', 'index', 'homePercetakan', 'download');
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

    public function download($folder, $filename){
    // Check if file exists in storage directory
    $file_path = storage_path() . '/app/' . $folder . '/' . $filename;
    
    
    if ( file_exists( $file_path ) ) { 
    // Send Download 
    return \Response::download( $file_path, $filename ); 

    } else { 
    // Error exit( 'Requested file does not exist on our server!' ); 
    echo "Error" . $file_path;
    }
 
    }
}
