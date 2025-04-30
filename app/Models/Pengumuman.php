<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengumuman extends Model
{
    protected $table = 'pengumumans';
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi_pengumuman',
        'file',
        'tanggal_pengumuman',
        'diposting_oleh',
        'kategori',
        'divisi_id',
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class);
    }
}