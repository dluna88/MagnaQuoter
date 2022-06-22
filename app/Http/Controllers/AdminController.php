<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\User;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.home');
    }

    public function pending(){
        $quotes = Quote::all();
        return view('admin.pending',compact('quotes'));
    }

    public function users(){
        $users = User::all()->except(Auth::id());
        
        return view('admin.users',compact('users'));
    }
}
