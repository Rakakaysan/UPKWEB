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
        Schema::create('manajemen_pengguna', function (Blueprint $table) {
            $table->uuid('manajemen_id')->primary();
            $table->string('nisn', 255);
            $table->string('nama_lengkap', 255);
            $table->string('jabatan', 255);
            $table->enum('status', ['Aktif', 'Tidak aktif']);
            $table->string('username', 25);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajemenpengguna');
    }
};
