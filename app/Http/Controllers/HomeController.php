<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return $data;
    }
}
