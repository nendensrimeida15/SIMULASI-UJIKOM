<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function koleksipribadi()
    {
        return $this->hasMany(Koleksipiribadi::class);
    }

    public function ulasanbuku()
    {
        return $this->hasMany(Ulasanbuku::class);
    }
}
