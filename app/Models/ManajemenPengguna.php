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
    protected $primaryKey = "id";
    protected $keyType = "string";

    protected $fillable = [
        'id',
        'nisn',
        'nama_lengkap',
        'jabatan',
        'status',
        'username',
        'password'
    ];

    // public $incrementing = false;

    // public function getAuthPassword()
    // {
    //     // Karena kolum password kita `user_password` kita harus deklarasikan ini dulu
    //     return $this->password;
    // }

    // public function getAuthIdentifier()
    // {
    //     return $this->getKey();
    // }

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            // 'id' => 'string',
            'password' => 'hashed',
        ];
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }
}
