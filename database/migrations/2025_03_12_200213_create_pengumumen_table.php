<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi_pengumuman');
            $table->string('file')->nullable();
            $table->date('tanggal_pengumuman');
            $table->string('diposting_oleh');
            $table->enum('kategori', ['Akademik', 'Lomba', 'Kegiatan', 'Beasiswa', 'Magang']);
            $table->foreignId('divisi_id')->constrained('divisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumumans');
    }
};
