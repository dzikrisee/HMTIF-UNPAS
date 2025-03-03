<?php

use App\Livewire\Index;
use App\Livewire\Agenda;
use App\Livewire\Proker;
use App\Livewire\DetailProker;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Divisi\Index as DivisiIndex;
use App\Http\Livewire\Kegiatan\Index as KegiatanIndex;
use App\Http\Livewire\Struktur\Index as StrukturIndex;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', Index::class)->name('index');
Route::get('/proker', Proker::class)->name('kegiatan');
Route::get('/agenda', Agenda::class)->name('agenda');
Route::get('/detail-proker', DetailProker::class)->name('detail-proker');
// Route::get('/struktur', StrukturIndex::class)->name('struktur');
// Route::get('/divisi', DivisiIndex::class)->name('divisi');
// Route::get('/kegiatan', KegiatanIndex::class)->name('kegiatan');
