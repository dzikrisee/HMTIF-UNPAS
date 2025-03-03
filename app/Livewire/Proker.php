<?php

namespace App\Livewire;

use Livewire\Component;

class Proker extends Component
{
    public function render()
    {
        return view('livewire.proker')
            ->layout('layouts.app'); // Tanpa "components"
    }
}
