<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function koleksipribadi()
    {
        return $this->hasMany(Koleksipiribadi::class);
    }

    public function kategoribuku_relasi()
    {
        return $this->hasMany(Kategoribuku_relasi::class);
    }

    public function ulasanbuku()
    {
        return $this->hasMany(Ulasanbuku::class);
    }
}
