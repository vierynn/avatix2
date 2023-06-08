<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function history(){
        return view('history');
    }
    public function purchase(){
        return view('purchase');
    }
    public function notification(){
        return view('notification');
    }
    public function profile(){
        return view('profile');
    }
}
