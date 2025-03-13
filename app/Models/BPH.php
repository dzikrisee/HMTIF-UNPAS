<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BPH extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'npm',
        'jabatan',
        'periode',
        'alamat',
        'foto_profil',
    ];

    public function tugasFungsi(): HasMany
    {
        return $this->hasMany(BPHTugasFungsi::class, 'bph_id');
    }
}
