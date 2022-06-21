<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\QuoteTable;

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

    public function layout()
    {
        return view('guest.layout');
    }

    public function rfq()
    {
        return view('guest.rfq');
    }

    public function rfq_post(Request $data){
        $rfq = QuoteTable::create([
            'volume' => $data->volume,
            'days_year' => $data->days_year,
            'shifts' => $data->shifts,
            'hours_shift' => $data->hours_shift,
            'tech_availibility' => $data->tech_availibility,
            'kickoff_date' => $data->kikkoff_date,
            'operators_required' => $data->operators_required,
            'total_robots' => $data->total_robots,
            'area' => $data->area,
        ]);

        return $rfq;
    }
}
