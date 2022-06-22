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
        return view('guest.upload');
    }

    public function upload_post(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
    
           ]);
    
           $name = $request->file('file')->getClientOriginalName();
    
           $path = $request->file('file')->store('public/files');
    
    
           $save = new File;
    
           $save->name = $name;
           $save->path = $path;
           $save->user_id = Auth::id();
    
           return redirect('guest.upload')->with('status', 'File Has been uploaded successfully');
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
        $cycle_time = 3600/((($data->volume/$data->tech_availibility)/$data->days_year)/($data->shifts*$data->hours_shift));
        $rfq = Quote::create([
            'volume' => $data->volume,
            'days_year' => $data->days_year,
            'shifts' => $data->shifts,
            'hours_shift' => $data->hours_shift,
            'tech_availibility' => $data->tech_availibility,
            'kickoff_date' => $data->kikkoff_date,
            'operators_required' => $data->operators_required,
            'total_robots' => $data->total_robots,
            'area' => $data->area,
            'cycle_time' => $cycle_time,
            'user_id' => Auth::id(),
        ]);

        return view('guest.quotes');
    }
}
