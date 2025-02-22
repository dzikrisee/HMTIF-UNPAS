<?php

use App\Livewire\Home\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Divisi\Index as DivisiIndex;
use App\Http\Livewire\Kegiatan\Index as KegiatanIndex;
use App\Http\Livewire\Struktur\Index as StrukturIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', Index::class)->name('home.index');
// Route::get('/struktur', StrukturIndex::class)->name('struktur');
// Route::get('/divisi', DivisiIndex::class)->name('divisi');
// Route::get('/kegiatan', KegiatanIndex::class)->name('kegiatan');
