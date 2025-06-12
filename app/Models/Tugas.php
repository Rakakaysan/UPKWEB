<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "tugas";
    protected $primaryKey = "id_tugas";
    protected $keyType = "string";

    public $timestamps = false;
    protected $fillable = [
        "id_tugas",
        "nama_tugas",
        "deskripsi_tugas",
        "tanggal_dibuat",
        "tanggal_diubah",
    ];
}
