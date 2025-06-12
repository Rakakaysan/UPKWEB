<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumpulanTugas extends Model
{
    protected $table = "pengumpulan_tugas";
    protected $primaryKey = "id_pengumpulan";
    protected $keyType = "string";

    public $timestamps = false;
    protected $fillable = [
        'id_tugas',
        'id_user',
        'jawaban_tugas',
        'tanggal_pungumpulan',
        'nilai',
        'tanggal_penilaian',
    ];
}
