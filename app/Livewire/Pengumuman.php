<?php

namespace App\Livewire;

use App\Models\Pengumuman as PengumumanModel;
use Livewire\Component;
use Livewire\WithPagination;

class Pengumuman extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $pengumumans = PengumumanModel::with('divisi')
            ->orderBy('tanggal_pengumuman', 'desc')
            ->paginate(5);

        return view('livewire.pengumuman', [
            'pengumumans' => $pengumumans
        ])->layout('layouts.app');
    }
}
