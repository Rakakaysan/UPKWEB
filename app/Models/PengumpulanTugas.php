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
        'tanggal_pengumpulan',
        'nilai',
        'tanggal_penilaian',
    ];

    public function user()
    {
        return $this->belongsTo(ManajemenPengguna::class, 'id_user', 'id');
    }

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, "id_tugas", "id_tugas");
    }
}
