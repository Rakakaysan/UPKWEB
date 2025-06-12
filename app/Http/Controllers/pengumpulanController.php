<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumpulanController extends Controller
{
    public function pengumpulan_tugas()
    {
        return view('admin.pengumpulan_tugas');
    }
    public function CreatePengumpulanTugas()
    {
        return view('admin.create.create_PengumpulanTugas');
    }
    public function EditPengumpulanTugasp()
    {
        return view('admin.create.Edit_pengumpulanTugas');
    }


    /**
     * Menyimpan materi baru ke database
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_materi' => 'required|string|max:255',
            'konten_materi' => 'required|string',
            'url_youtube' => 'required|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        MateriPembelajaran::create($request->all());

        return redirect()
            ->route('materi_pembelajaran')
            ->with('success', 'Materi berhasil ditambahkan!');
    }

    /**
     * Mengupdate materi di database
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_materi' => 'required|string|max:255',
            'konten_materi' => 'required|string',
            'url_youtube' => 'required|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $materi = MateriPembelajaran::findOrFail($id);
        $materi->update($request->all());

        return redirect()
            ->route('materi_pembelajaran')
            ->with('success', 'Materi berhasil diperbarui!');
    }

    public function delete($id)
    {
        try {
            $pengguna = MateriPembelajaran::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('materi_pembelajaran')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
