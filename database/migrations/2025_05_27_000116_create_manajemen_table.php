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
        Schema::create('manajemen', function (Blueprint $table) {
    $table->bigIncrements('id_manajemen'); // Ini adalah kolom auto_increment
    $table->integer('nip')->unsigned(); // Hapus auto_increment dari kolom ini
    $table->string('nama lengkap');
    $table->string('jabatan');
    $table->string('status');
    $table->string('username');
    $table->string('password');
    $table->primary('id_manajemen'); // Tetapkan id_manajemen sebagai primary key
        });     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajemen');
    }
};
