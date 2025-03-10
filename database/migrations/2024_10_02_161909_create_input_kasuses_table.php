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
        Schema::create('input_kasuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->refrences('id')->on('statuses')->cascadeOnDelete();
            $table->string('nomor_administrasi')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('sptug')->nullable();
            $table->string('spops')->nullable();
            $table->string('permohonan_laporan')->nullable();
            $table->string('nodis_laporan')->nullable();
            $table->string('penunjuk_ahli')->nullable();
            $table->string('sp_penunjuk_ahli')->nullable();
            $table->string('ahli_p9')->nullable();
            $table->string('sp_panggilan')->nullable();
            $table->string('panggilan_sidang')->nullable();
            $table->string('sp_ahli')->nullable();
            $table->string('ahli_ditunjuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_kasuses');
    }
};
