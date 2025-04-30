<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProgramKerja; // Ganti dari Proker ke ProgramKerja

class Index extends Component
{
    public function render()
    {
        $prokers = ProgramKerja::latest()->take(4)->get(); // Ambil 4 program kerja terbaru

        return view('livewire.index', [
            'prokers' => $prokers
        ])->layout('layouts.app');
    }
}
