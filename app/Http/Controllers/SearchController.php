<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concerts;
use App\Models\Ticket;

class SearchController extends Controller
{
    // public function __invoke(Request $request){
    //     $search=$request->input('search');
    //     $concerts=Concerts::where('name','like','%'.$search.'%')->get();
    //     return view('search', compact('concerts'));
    // }
    public function search(Request $request){
        $query = $request->input('query');
        $results = Concerts::where('name', 'like', '%'.$query.'%')
                        ->orWhere('artist', 'like', '%'.$query.'%')
                        ->get();

        return view('home', compact('results'));
    }
}
