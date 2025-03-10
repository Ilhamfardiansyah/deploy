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
        Schema::create('sp_ahlis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id')->on('petugas')->caseOnDelete();
            $table->string('no_perintah');
            $table->date('tanggal');
            $table->text('menimbang_point');
            $table->text('dasar');
            $table->text('untuk');
            $table->string('tahun');
            $table->date('tanggal_1');
            $table->string('jabatan');
            $table->string('pejabat');
            $table->string('tembusan_1');
            $table->string('tembusan_2');
            $table->string('tembusan_3');
            $table->string('tembusan_4');
            $table->string('tembusan_5');
            $table->string('tembusan_6');
            $table->string('tembusan_7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_ahlis');
    }
};
