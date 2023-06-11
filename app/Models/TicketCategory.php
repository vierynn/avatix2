<?php

namespace App\Models;
use App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;
    protected $table = "ticketcategory";

    protected $fillable = [
        'price',
        'date',
        'category',
        'concert_id'
    ];

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}

