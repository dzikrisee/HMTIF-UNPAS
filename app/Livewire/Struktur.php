<?php

namespace App\Livewire;

use App\Models\BPH;
use Livewire\Component;

class Struktur extends Component
{
    
    public function render()
    {
        $bphs = BPH::all();

        return view('livewire.struktur', [
            'bphs' => $bphs
        ])->layout('layouts.app');
    }
}
