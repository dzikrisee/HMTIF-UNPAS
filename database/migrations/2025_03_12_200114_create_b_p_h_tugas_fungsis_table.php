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
        Schema::create('b_p_h_tugas_fungsis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bph_id')->constrained('b_p_h_s')->onDelete('cascade');
            $table->text('tugas_fungsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_p_h_tugas_fungsis');
    }
};
