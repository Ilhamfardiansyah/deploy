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
        Schema::create('nodis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('pejabat_id')->on('pejabats')->caseOnDelete();
            $table->string('nodis');
            $table->date('tanggal');
            $table->string('yth');
            $table->string('dari');
            $table->date('tanggal_1');
            $table->enum('status', ['Rahasia', 'Tidak Rahasia']);
            $table->string('lampiran');
            $table->text('isi');
            $table->text('isi_perihal');
            $table->string('tembusan_1');
            $table->string('tembusan_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodis');
    }
};
