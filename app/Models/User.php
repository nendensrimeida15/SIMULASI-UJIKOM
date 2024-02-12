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

<<<<<<< HEAD
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'email',
        'nama_lengkap',
        'alamat',
        'role'
    ];
=======
    protected $table = 'users';
    protected $guarded = ['id'];
>>>>>>> 5851d882e1ef531a20a1fbfdb76836aa0aabe28b

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

<<<<<<< HEAD
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
        'remember_token',
    ];
=======
    public function koleksipribadi()
    {
        return $this->hasMany(Koleksipiribadi::class);
    }
>>>>>>> 5851d882e1ef531a20a1fbfdb76836aa0aabe28b

    public function ulasanbuku()
    {
        return $this->hasMany(Ulasanbuku::class);
    }
}
