<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concerts;
use App\Models\TicketCategory;

class ConcertController extends Controller
{
    public function showconcert(){
        $concerts= Concerts::all();
        return view('allconcert', compact('concerts'));
    }
    public function information(){
        $date= TicketCategory::all();
        return view('allconcert', compact('date'));
    }
}
