<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('b_p_h_tugas_fungsis', function (Blueprint $table) {
            if (!Schema::hasColumn('b_p_h_tugas_fungsis', 'bph_id')) {
                $table->foreignId('bph_id')->nullable()->constrained('b_p_h_s')->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('b_p_h_tugas_fungsis', function (Blueprint $table) {
            if (Schema::hasColumn('b_p_h_tugas_fungsis', 'bph_id')) {
                $table->dropForeign(['bph_id']);
                $table->dropColumn('bph_id');
            }
        });
    }
};
