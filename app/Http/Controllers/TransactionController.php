<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketCategory;
use App\Models\Concerts;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function showcat($id=null, $cat=null){
        
        if ($id):
            $ticket = TicketCategory::find($id);
        else:
            $ticket = TicketCategory::with('id')->all();
        endif;
        return view('paymentsolo', [
            'ticket' => $ticket
        ]);
    }

    public function store(Request $request)
    {
        Transaction::create([
            'quantity' => (int)$request->people,
            'date' => Carbon::now()->format('Y-m-d'),
            'transMethod' => $request->transMethod,
            'total' => (int)$request->total,
            'user_id' => 1,
            'ticketcat_id' => (int)$request->ticket_id,
            'promo' => $request->promo
        ]);
        
        return redirect('/home');
    }

    public function create()
    {
        return view('add-form');
    }
}

