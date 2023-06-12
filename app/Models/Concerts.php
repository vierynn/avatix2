<?php

namespace App\Models;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TicketCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concerts extends Model
{
    use HasFactory;
    protected $table = "concerts";

    protected $fillable = [
        'name',
        'artist',
        'type',
        'status',
        'day',
        'date',
        'month',
        'start_time',
        'duration',
        'year',
        'city',
        'place',
        'description',
        'image_path',
        'seatplan_path',
    ];
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id', 'concert_id');
    }

    public function ticketcategory()
    {
        return $this->hasMany(TicketCategory::class, 'id', 'concert_id');
    }
}
