<?php

namespace App\Livewire;

use App\Models\Pengumuman;
use Livewire\Component;

class DetailPengumuman extends Component
{
    public $pengumumanId;

    public function mount($id)
    {
        $this->pengumumanId = $id;
    }

    public function render()
    {
        $pengumuman = Pengumuman::with('divisi')->findOrFail($this->pengumumanId);

        // Mendapatkan pengumuman terkait dengan kategori yang sama
        $relatedPengumumans = Pengumuman::where('id', '!=', $this->pengumumanId)
            ->where('kategori', $pengumuman->kategori)
            ->orderBy('tanggal_pengumuman', 'desc')
            ->limit(3)
            ->get();

        return view('livewire.detail-pengumuman', [
            'pengumuman' => $pengumuman,
            'relatedPengumumans' => $relatedPengumumans
        ])->layout('layouts.app');
    }
}
