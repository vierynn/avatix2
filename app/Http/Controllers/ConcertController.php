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
    public function show($id=null)
    {
        if ($id):
            $concert = Concerts::find($id);
            $ticket = TicketCategory::with('concerts')->find($id);
        else:
            $concert = Concerts::with('concert_id')->all();
            $ticket = TicketCategory::with('concerts')->all();
        endif;
        return view('bookedpage', [
            'ticket' => $ticket,
            'concert' => $concert
        ]);

    }
}
