<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketCategory;
use App\Models\Concerts;

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
}
