<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}
