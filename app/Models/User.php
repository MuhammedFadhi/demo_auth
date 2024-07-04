<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->user_id = self::generateUniqueUserId();
        });
    }

    private static function generateUniqueUserId()
    {
        $userId = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));

        while (self::where('user_id', $userId)->exists()) {
            $userId = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
        }

        return $userId;
    }
}