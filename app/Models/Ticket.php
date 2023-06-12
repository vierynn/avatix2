<?php

namespace App\Models;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\Concerts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "ticket";

    protected $fillable = [
        'concert_id',
        'ticketcat_id'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function ticketcategory()
    {
        return $this->belongsTo(TicketCategory::class);
    }
    public function concerts()
    {
        return $this->belongsTo(Concerts::class);
    }
}

