<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_divisi',
        'koordinator',
        'periode',
        'logo_divisi',
    ];

    public function tugasFungsi(): HasMany
    {
        return $this->hasMany(DivisiTugasFungsi::class);
    }

    public function programKerja(): HasMany
    {
        return $this->hasMany(ProgramKerja::class);
    }

    public function agenda(): HasMany
    {
        return $this->hasMany(Agenda::class);
    }

    public function pengumuman(): HasMany
    {
        return $this->hasMany(Pengumuman::class);
    }
}