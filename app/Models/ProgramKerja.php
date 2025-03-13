<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisi_id',
        'judul_kegiatan',
        'tanggal_kegiatan',
        'deskripsi_kegiatan',
        'gambar_kegiatan',
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class);
    }
}