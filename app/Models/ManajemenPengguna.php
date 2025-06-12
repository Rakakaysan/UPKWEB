<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class ManajemenPengguna extends Model
{
    protected $table = "manajemenpengguna";
    protected $primaryKey = "manajemen_id";
    protected $keyType = "string";

    protected $fillable = [
        'manajemen_id',
        'nip',
        'nama_lengkap',	
        'jabatan',
        'status',	
        'username',
        'password'	

    ];
    public function setPasswordAttribute ($value) {
        $this->attributes['password'] = Hash::make($value);
    }
}
