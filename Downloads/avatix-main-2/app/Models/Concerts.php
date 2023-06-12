<?php

namespace App\Models;
use App\Models\User;
use App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concerts extends Model
{
    use HasFactory;
    protected $table = "concerts";

    protected $fillable = [
        'name',
        'price',
        'type',
        'status',
        'location',
        'description'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
