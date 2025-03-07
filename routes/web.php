<?php

use App\Livewire\Index;
use App\Livewire\Agenda;
use App\Livewire\Proker;
use App\Livewire\Struktur;
use App\Livewire\Divisi;
use App\Livewire\DetailDivisi;
use App\Livewire\DetailProker;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Divisi\Index as DivisiIndex;
use App\Http\Livewire\Kegiatan\Index as KegiatanIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', Index::class)->name('index');
Route::get('/proker', Proker::class)->name('kegiatan');
Route::get('/agenda', Agenda::class)->name('agenda');
Route::get('/detail-proker', DetailProker::class)->name('detail-proker');
Route::get('/struktur', Struktur::class);
Route::get('/divisi', Divisi::class);
Route::get('/detail-divisi', DetailDivisi::class);
