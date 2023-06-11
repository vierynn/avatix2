<?php

namespace App\Models;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Ticket;

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
        'city',
        'place',
        'description',
        'image_path',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
