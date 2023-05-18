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
        Schema::create('tes_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamp('tanggal_pemeriksaan');
            $table->smallInteger('usia');
            $table->string('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tes_pemeriksaan');
    }
};
