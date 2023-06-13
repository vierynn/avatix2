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
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'transMethod',
        'promo',
        'date',
        'user_id',
        'ticketcat_id',
        'quantity',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ticket()
    {
        return $this->belongsTo(TicketCategory::class, 'ticketcat_id');
    }
}
