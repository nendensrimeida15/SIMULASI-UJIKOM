<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoribuku extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku';
    protected $guarded = ['id'];

    public function kategoribuku_relasi()
    {
        return $this->hasMany(Kategoribuku_relasi::class);
    }
}
