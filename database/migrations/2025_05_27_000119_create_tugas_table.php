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
        Schema::disableForeignKeyConstraints();

        Schema::create('tugas', function (Blueprint $table) {
        $table->bigIncrements('id_tugas'); // Pastikan ini adalah primary key
        $table->string('nama_tugas');
        $table->string('deskripsi_tugas');
        $table->bigInteger('tanggal_dibuat');
        $table->bigInteger('tanggal_diubah');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
