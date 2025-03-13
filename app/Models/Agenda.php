<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisi_id',
        'judul_kegiatan',
        'tanggal_kegiatan',
        'deskripsi_kegiatan',
        'gambar_kegiatan',
    ];

    protected $casts = [
        'gambar_kegiatan' => 'array', // Jika menyimpan array gambar
        // ATAU
        // 'gambar_kegiatan' => 'string', // Jika menyimpan path tunggal
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class);
    }
}
