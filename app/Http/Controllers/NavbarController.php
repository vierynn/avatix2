<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class NavbarController extends Controller
{
    public function history(){
        return view('history');
    }
    public function purchase(){
        $trans= Transaction::all();
        return view('purchase', compact('trans'));
    }
    public function notification(){
        return view('notification');
    }
    public function profile(){
        return view('profile');
    }
}
