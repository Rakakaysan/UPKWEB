<?php

namespace App\Http\Controllers;

use App\Models\MateriPembelajaran;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function beranda()
    {
        return redirect(route('siswa.kompetisi'));

        // return view('public.beranda_siswa');
    }

    public function kompetisi()
    {
        return view('public.kompetisi');
    }

    public function materi(Request $request)
    {
        $input =  $request->input("q");

        if ($input) {
            $materi = materiPembelajaran::where("nama_materi", 'like', '%' . $input . '%')->paginate(10);

            return view('public.materi_siswa', ['materi' => $materi, 'input' => $input]);
        }

        $materi = materiPembelajaran::orderBy('nama_materi')->paginate(10);
        return view('public.materi_siswa', ['materi' => $materi]);
    }

    public function materiById($id)
    {
        $materi_id = materiPembelajaran::findOrFail($id);
        $materi = materiPembelajaran::orderBy('nama_materi')->paginate(10);

        return view('public.materi_siswa', [
            'materi_id' => $materi_id,
            'materi' => $materi
        ]);
    }

    public function tugas()
    {
        $tugas = Tugas::with(["pengumpulan"])->orderBy(column: 'nama_tugas')->paginate(10);

        // return $tugas;

        return view('public.tugas_siswa', [
            "tugas" => $tugas
        ]);
    }

    public function tugasById($id)
    {
        $tugas = Tugas::findOrFail($id);

        return view('public.pengumpulan_tugas_siswa', [
            'tugas' => $tugas,
        ]);
    }


    public function tentang()
    {
        return view('public.tentang_aplikasi_siswa');
    }

    public function authTest()
    {
        $user = auth("admin")->user();

        return response()->json([
            "user" => $user
        ]);
    }
}
