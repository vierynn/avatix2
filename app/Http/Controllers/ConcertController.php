<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concerts;

class ConcertController extends Controller
{
    public function showconcert(){
        $concerts= Concerts::all();
        return view('allconcert', compact('concerts'));
    }
}
