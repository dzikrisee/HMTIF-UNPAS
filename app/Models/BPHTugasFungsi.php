<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BPHTugasFungsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'b_p_h_id',
        'tugas_fungsi',
    ];

    public function bph(): BelongsTo
    {
        return $this->belongsTo(BPH::class, 'bph_id');
    }
}
