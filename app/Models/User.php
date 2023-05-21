<?php

namespace App\Models;
use App\Models\Concerts;
use App\Models\Transaction;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = "users";

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password'
    ];

    public function concerts()
    {
        return $this->hasMany(Concerts::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
