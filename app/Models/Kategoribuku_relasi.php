<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoribuku_relasi extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku_relasi';
    protected $guarded = ['id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function kategoribuku()
    {
        return $this->belongsTo(Kategoribuku::class);
    }
}
