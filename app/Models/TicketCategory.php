<?php

namespace App\Models;
use App\Models\Transaction;
use App\Models\Concerts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;
    protected $table = "ticketcategory";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'price',
        'day',
        'date',
        'month',
        'year',
        'category',
        'concert_id'
    ];

    public function concerts()
    {
        return $this->belongsTo(Concerts::class, 'concert_id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'ticketcat_id', 'id');
    }
}

