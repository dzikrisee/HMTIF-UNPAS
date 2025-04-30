<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProgramKerja;

class DetailProker extends Component
{
    public $programKerja;
    public $kegiatanTerbaru;

    public function mount($id = null)
    {
        if ($id) {
            $proker = ProgramKerja::with('divisi')->find($id);

            if (!$proker) {
                return redirect()->route('program-kerja')->with('error', 'Program kerja tidak ditemukan');
            }

            // Detail kegiatan
            $this->programKerja = collect([$proker]);

            // Ambil kegiatan terbaru, kecuali yang sedang dibuka
            $this->kegiatanTerbaru = ProgramKerja::where('id', '!=', $id)
                ->latest()
                ->take(5)
                ->get();
        } else {
            // Jika tidak ada ID, ambil semua program kerja
            $this->programKerja = ProgramKerja::with('divisi')->get();

            // Jika tidak ada ID, tetap ambil kegiatan terbaru
            $this->kegiatanTerbaru = ProgramKerja::latest()->take(5)->get();
        }
    }

    public function render()
    {
        return view('livewire.detail-proker')
            ->layout('layouts.app');
    }
}
