<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concerts;
use App\Models\TicketCategory;

class ConcertController extends Controller
{

    public function showconcert(){
        // var_dump(Auth::user());
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
        else:
            $concert = Concerts::with('concert_id')->all();
        endif;
        return view('bookedpage', [
            'concert' => $concert
        ]);
    }
    public function showdetail($id=null)
    {
        if ($id):
            $concert = Concerts::find($id);
        else:
            $concert = Concerts::with('concert_id')->all();
        endif;
        return view('bookdetail', [
            'concert' => $concert
        ]);

    }
    public function ticketshow(){
        if ($id):
            $concert = Concerts::find($id);
        else:
            $concert = Concerts::with('concert_id')->all();
        endif;
        return view('bookedpage', [
            'concert' => $concert
        ]);
    }
}
