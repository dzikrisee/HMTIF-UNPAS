<?php

use App\Livewire\Index;
use App\Livewire\Agenda;
use App\Livewire\Divisi;
use App\Livewire\Proker;
use App\Livewire\Struktur;
use App\Livewire\DetailAgenda;
use App\Livewire\DetailDivisi;
use App\Livewire\DetailProker;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Struktur\Index as StrukturIndex;
use App\Http\Livewire\Divisi\Index as DivisiIndex;
use App\Http\Livewire\Kegiatan\Index as KegiatanIndex;
use App\Http\Livewire\Struktur\Index as StrukturIndex;
use App\Livewire\DetailPengumuman;
use App\Livewire\DetailStruktur;
use App\Livewire\Pengumuman;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', Index::class)->name('index');
Route::get('/proker', Proker::class)->name('proker');
Route::get('/agenda', Agenda::class)->name('agenda');
Route::get('/divisi', Divisi::class)->name('divisi');
Route::get('/detail-proker', DetailProker::class)->name('detail-proker');
Route::get('/detail-agenda', DetailAgenda::class)->name('detail-agenda');
Route::get('/struktur', Struktur::class)->name('struktur');
Route::get('/divisi', Divisi::class)->name('divisi');
Route::get('/detail-divisi', DetailDivisi::class)->name('detail-divisi');
Route::get('/detail-struktur', DetailStruktur::class)->name('detail-struktur');
Route::get('/pengumuman', Pengumuman::class)->name('pengumuman');
Route::get('/detail-pengumuman', DetailPengumuman::class)->name('detail-pengumuman');
