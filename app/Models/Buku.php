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

}
