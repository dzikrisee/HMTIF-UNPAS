<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Divisi;

class DetailDivisi extends Component
{
    public $divisiId;
    public $divisi;
    public $tugasFungsi;
    public $programKerja;
    public $agenda;

    public function mount($id)
    {
        $this->divisiId = $id;
        $this->loadDivisi();
    }

    protected function loadDivisi()
    {
        $this->divisi = Divisi::with(['tugasFungsi', 'programKerja', 'agenda'])->find($this->divisiId);

        if (!$this->divisi) {
            return redirect()->route('divisi')->with('error', 'Divisi tidak ditemukan');
        }

        $this->tugasFungsi = $this->divisi->tugasFungsi;
        $this->programKerja = $this->divisi->programKerja;
        $this->agenda = $this->divisi->agenda;
    }

    public function render()
    {
        return view('livewire.detail-divisi')
            ->layout('layouts.app');
    }
}
