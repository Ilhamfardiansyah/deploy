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
        Schema::create('tug_petugas', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('petugas_id');
            $table->unsignedBigInteger('tug_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tug_petugas');
    }
};
