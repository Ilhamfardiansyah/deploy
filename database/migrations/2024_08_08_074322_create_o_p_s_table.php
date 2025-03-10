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
        Schema::create('o_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('noSPOps');
            $table->date('tanggal');
            $table->text('menimbang_point');
            $table->text('untuk_1');
            $table->string('tanggal_2');
            $table->string('tanggal_3');
            $table->string('tahun');
            $table->text('bulan');
            $table->string('tahun2');
            $table->string('kepala_kejaksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('o_p_s');
    }
};
