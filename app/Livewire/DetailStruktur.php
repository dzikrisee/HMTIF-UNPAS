<?php

namespace App\Livewire;

use App\Models\BPH;
use Livewire\Component;

class DetailStruktur extends Component
{
    public $bphId;
    public $bph;

    public function mount($id)
    {
        $this->bphId = $id;
        $this->bph = BPH::with('tugasFungsi')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.detail-struktur', [
            'bph' => $this->bph
        ])->layout('layouts.app');
    }
}
