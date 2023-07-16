<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Buku;
// use App\Models\User;

class Pinjam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
