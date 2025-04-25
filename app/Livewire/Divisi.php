<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Divisi as DivisiModel;

class Divisi extends Component
{
    // Tambahkan metode redirectToDetail di sini
    public function redirectToDetail($id)
    {
        return redirect()->route('detail-divisi', ['id' => $id]);
    }

    public function render()
    {
        $divisi = DivisiModel::all();

        return view('livewire.divisi', [
            'divisi' => $divisi
        ])
            ->layout('layouts.app');
    }
}
