<?php

namespace App\Models;
use App\Models\User;
use App\Models\TicketCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";

    protected $fillable = [
        'transMethod',
        'promo',
        'date',
        'user_id',
        'ticket_id',
        'quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function ticket()
    {
        return $this->belongsTo(TicketCategory::class, 'id');
    }
}
