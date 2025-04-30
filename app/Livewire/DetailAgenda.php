<?php

namespace App\Livewire;

use App\Models\Agenda;
use Livewire\Component;

class DetailAgenda extends Component
{
    public $agenda;
    public $agendaTerbaru;

    public function mount($id = null)
    {
        if ($id) {
            $detail = Agenda::with('divisi')->find($id);

            if (!$detail) {
                return redirect()->route('agenda')->with('error', 'Agenda tidak ditemukan');
            }

            // Detail agenda
            $this->agenda = collect([$detail]);

            // Ambil agenda terbaru, kecuali yang sedang dibuka
            $this->agendaTerbaru = Agenda::where('id', '!=', $id)
                ->latest()
                ->take(5)
                ->get();
        } else {
            // Jika tidak ada ID, ambil semua agenda
            $this->agenda = Agenda::with('divisi')->get();

            // Ambil agenda terbaru
            $this->agendaTerbaru = Agenda::latest()->take(5)->get();
        }
    }

    public function render()
    {
        return view('livewire.detail-agenda')
            ->layout('layouts.app');
    }
}
