<?php

namespace App\Models;
use App\Models\User;
use App\Models\Concerts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transaction";

    protected $fillable = [
        'transMethod',
        'promo',
        'date',
        'user_id',
        'concert_id'
    ];

    public function concerts()
    {
        return $this->belongsTo(Concerts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
