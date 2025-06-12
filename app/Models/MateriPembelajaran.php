<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriPembelajaran extends Model
{
    protected $table = "materi_pembelajaran";
    protected $primaryKey = "id_materi";
    protected $keyType = "string";

    public $timestamps = false;
    protected $fillable = [
        'nama_materi',
        'konten_materi',
        'url_youtube',
    ];
}
