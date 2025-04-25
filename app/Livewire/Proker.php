<?php

namespace App\Livewire;

use App\Models\ProgramKerja;
use Livewire\Component;

class Proker extends Component
{
    public function render()
    {
        $proker = ProgramKerja::all();

        return view('livewire.proker', [
            'proker' => $proker
        ])
            ->layout('layouts.app'); // Tanpa "components"
    }
}
