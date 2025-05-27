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

        Schema::create('pengumpulan_tugas', function (Blueprint $table) {
    $table->bigIncrements('id_pengumpulan'); // Pastikan kolom ini ada
    $table->unsignedBigInteger('id_tugas'); // Kolom untuk foreign key
    $table->foreign('id_tugas')->references('id_tugas')->on('tugas')->onDelete('cascade'); // Menambahkan constraint foreign key
    // Kolom lainnya
            $table->bigInteger('id_user');
            $table->string('jawaban_tugas');
            $table->string('tanggal_pungumpulan');
            $table->bigInteger('nilai');
            $table->bigInteger('tanggal_penilaian');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas');
    }
};
