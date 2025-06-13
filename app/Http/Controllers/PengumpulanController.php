<?php

namespace App\Http\Controllers;

use App\Models\Manajemenpengumpulan;
use App\Models\PengumpulanTugas;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumpulanController extends Controller
{
    public function index()
    {
        $pengumpulan = PengumpulanTugas::with(["user", "tugas"])->orderBy(column: 'nilai')->paginate(10);


        // return $pengumpulan;

        return view('admin.pengumpulan_tugas', [
            'pengumpulan' => $pengumpulan
        ]);
    }

    public function edit($id)
    {
        $pengumpulan = PengumpulanTugas::findOrFail($id);

        return view('admin.update.edit_nilai_pengumpulan_tugas', ["pengumpulan" => $pengumpulan]);
    }


    public function store(Request $request, $id)
    {

        $tugas = Tugas::findOrFail($id);
        $user = auth("web")->user();

        $validator = Validator::make($request->all(), [
            'jawaban_tugas' => 'required|max:65536',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        PengumpulanTugas::create([
            ...$request->all(),
            'id_tugas' => $tugas->id_tugas,
            'id_user' =>  $user->id,
            'tanggal_pengumpulan' => now()

        ]);

        return redirect()
            ->route('siswa.tugas')
            ->with('success', 'Tugas berhasil dikumpulkan!');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $pengumpulan = PengumpulanTugas::findOrFail($id);
            $pengumpulan->update([
                ...$request->all(),
                "tanggal_penilaian" => now()
            ]);

            return redirect()->route('pengumpulan_tugas.index')
                ->with('success', 'Tugas siswa berhasil dinilai!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menilai: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $pengguna = PengumpulanTugas::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('pengumpulan_tugas.index')
                ->with('success', 'Pengumpulan berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
