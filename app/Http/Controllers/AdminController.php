<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\User;
use App\Models\File;

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
        $files = File::where('user_id',Auth::id())->get();
        $quotes = Quote::where('user_id',Auth::id())->get();
        return view('admin.users',compact('users','files','quotes'));
    }

    public function files(){
        $files = File::where('user_id', Auth::id())->get();
        return view('admin.files', compact('files'));
    }
}
