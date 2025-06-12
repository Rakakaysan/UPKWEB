<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class ManajemenPengguna extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "manajemen_pengguna";
    protected $primaryKey = "manajemen_id";
    protected $keyType = "string";

    protected $fillable = [
        'manajemen_id',
        'nisn',
        'nama_lengkap',
        'jabatan',
        'status',
        'username',
        'password'

    ];

    // public function getAuthPassword()
    // {
    //     // Karena kolum password kita `user_password` kita harus deklarasikan ini dulu
    //     return $this->password;
    // }

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }
}
