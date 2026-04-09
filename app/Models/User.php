<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiToken;

class User extends Authenticatable
{
    // use HasApiToken, HasFactory, Notifiable;
    // protected $table = "guru";
    // protected primaryKey = "id";
    protected $fillable = [
        'name',
        'nisn',
        'alamat',
        'email',
        'password'
    ];

    // Pastikan password di-hash saat disimpan
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}

