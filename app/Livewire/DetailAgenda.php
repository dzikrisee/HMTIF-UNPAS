<?php

namespace App\Livewire;

use Livewire\Component;

class DetailAgenda extends Component
{
    public function render()
    {
        return view('livewire.detail-agenda')
            ->layout('layouts.app');
    }
}
