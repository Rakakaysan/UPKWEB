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
            $table->bigIncrements('id_pengumpulan');
            $table->unsignedBigInteger(column: 'id_tugas');
            $table->foreign('id_tugas')->references('id_tugas')->on('tugas')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_user');
            $table->longText('jawaban_tugas');
            $table->tinyInteger('nilai');
            $table->dateTime('tanggal_pengumpulan');
            $table->dateTime('tanggal_penilaian');
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
