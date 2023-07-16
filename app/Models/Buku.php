<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoriBuku(): BelongsTo
    {
        return $this->belongsTo(KategoriBuku::class);
    }
}
