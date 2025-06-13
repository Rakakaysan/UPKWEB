<?php

namespace Database\Seeders;

use App\Models\ManajemenPengguna;
use App\Models\MateriPembelajaran;
use App\Models\Tugas;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => "admin",
            'password' => bcrypt("1234567890")
        ]);

        ManajemenPengguna::create([
            'nisn' => "1234567890",
            'nama_lengkap' => "Siswa AKSATA",
            'jabatan' => "11 RPL 1",
            'status' => "Aktif",
            'username' => "siswa",
            'password' => bcrypt("1234567890")
        ]);

        MateriPembelajaran::create([
            'nama_materi' => "Mitsubishi L300",
            'konten_materi' => "The L300 utility vehicle. Now more powerful than ever. The powerful 2.2 liter (Euro-4-compliant) engine provides 40% more torque and pulling power.",
            'url_youtube' => "https://www.youtube.com/watch?v=Sm-yCsdT29c",
        ]);

        Tugas::create([
            "nama_tugas" => "Mengganti Air Radiator L300",
            "deskripsi_tugas" => "Ganti Air Radiator L300 || Pakai air ini agar aman dari kerak dan teyeng",
            "tanggal_dibuat" => now(),
            "tanggal_diubah" => now(),
        ]);
    }
}
