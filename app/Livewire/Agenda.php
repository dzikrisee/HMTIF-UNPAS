<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Agenda as AgendaModel;

class Agenda extends Component
{


    public function render()
    {
        $agenda = AgendaModel::all();

        return view('livewire.agenda', [
            'agenda' => $agenda
        ])
            ->layout('layouts.app'); // Tanpa "components"
    }
}
