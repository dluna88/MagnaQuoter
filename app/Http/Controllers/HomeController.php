<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quote;
use App\Models\File;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function upload(){
        $files = File::where('user_id',Auth::id())->get();
        return view('guest.upload',compact('files'));
    }

    public function upload_post(Request $request)
    {
        $validatedData = $request->validate([
            'file' => ['required','mimes:csv,txt,xlx,xls,pdf','max:2048'],
        ]);
    
        $name = $request->file('file')->getClientOriginalName();
    
        $path = $request->file('file')->store('storage/public/files');
    
        $save = new File;
    
        $save->name = $name;
        $save->path = $path;
        $save->user_id = Auth::id();

        File::create([
            'name' => $save->name,
            'path' => $save->path,
            'user_id' => $save->user_id
        ]);
        
        $files = File::where('user_id', Auth::id())->get();
        $status = "File uploaded successfully";
        return view('guest.upload', compact('files','status'));
    }

    public function layout()
    {
        return view('guest.layout');
    }

    public function rfq()
    {
        return view('guest.rfq');
    }

    public function rfq_post(Request $data){
        $validatedData = $data->validate([
            'volume' => 'required',
            'days_year' => 'required',
            'shifts' => 'required',
            'hours_shift' => 'required',
            'tech_availibility' => 'required',
            'kickoff_date' => 'required',
            'operators_required' => 'required',
            'total_robots' => 'required',
            'area' => 'required'
        ]);
        
        $cycle_time = 3600/((($data->volume/$data->tech_availibility)/$data->days_year)/($data->shifts*$data->hours_shift));
        $rfq = new Quote;
        $rfq->volume = $data->volume;
        $rfq->days_year = $data->days_year;
        $rfq->shifts = $data->shifts;
        $rfq->hours_shift = $data->hours_shift;
        $rfq->tech_availibility = $data->tech_availibility;
        $rfq->kickoff_date = $data->kikkoff_date;
        $rfq->operators_required = $data->operators_required;
        $rfq->total_robots = $data->total_robots;
        $rfq->area = $data->area;
        $rfq->cycle_time = $cycle_time;
        $rfq->user_id = Auth::id();
        
        $rfq->save();

        return view('guest.quotes')->with('status','Quote created succesfully');
    }
}
