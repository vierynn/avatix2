<?php

namespace App\Models;
use App\Models\Transaction;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'email',
        'username',
        'password',
        'profile_pic'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id', 'id');
    }
}
