<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorybarController extends Controller
{
    public function all(){
        return view('allconcert');
    }
    public function kpop(){
        return view('kpop');
    }
    public function festivalmusic(){
        return view('festival');
    }
    public function solo(){
        return view('solo');
    }
    public function meet(){
        return view('meet');
    }
    public function pop(){
        return view('pop');
    }
}
