<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignJob;
use App\Percetakan;

class DesignJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:percetakan')->except(['showAvailable', 'showDetail']);
    }

    public function index(){
        $percetakan = Percetakan::find(request()->user()->id());
        
        $designjob = $percetakan->designjob()->get();

        return view('designjob/index')->with(compact('designjob'));
    }

    public function create(){

        return view('designjob/create');
    }

    public function store(){
        $percetakanId = request()->user()->id();
        $percetakan = Percetakan::find($percetakanId);

        $services = $percetakan->designjob()->create([
            'title' => request()->title,
            'description' => request()->description,
            'budget' => request()->budget,
            'attachment' => "temporary",
            'deadline' => request()->deadline
        ]);

        return redirect('percetakan/design');
    }

    public function showAvailable(){
        $designjob = DesignJob::get();

        return view('designjob/job-list')->with(compact('designjob'));
    }

    public function showDetail($id){
        $job = DesignJob::find($id);

        $percetakan = Percetakan::find($job->percetakan_id);

        return view('designjob/job-detail')->with(compact('job', 'percetakan'));
    }

    public function info($id){
        $job = DesignJob::find($id);
        return view('designjob/info')->with(compact('job'));
    }
}
