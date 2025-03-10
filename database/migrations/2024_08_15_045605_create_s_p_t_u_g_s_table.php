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
        Schema::create('s_p_t_u_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('NoSp_tug');
            $table->date('tanggal');
            $table->text('menimbang_point');
            $table->text('untuk_1');
            $table->date('tanggal_1');
            $table->date('tanggal_2');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('kepala_kejaksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_t_u_g_s');
    }
};
