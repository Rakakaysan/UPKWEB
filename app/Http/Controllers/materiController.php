<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PengumpulanTugas;

class MateriController extends Controller
{
    /**
     * Menampilkan daftar materi pembelajaran
     */
    public function materi_pembelajaran()
    {
        $materi = PengumpulanTugas::all();
        return view('Admin.materi_pembelajaran', ['materi' => $materi]);
    }

    /**
     * Menampilkan form untuk membuat materi baru
     */
    public function CreatePengumpulanTugas()
    {
        return view('Admin.create.create_PengumpulanTugas');
    }


    /**
     * Menampilkan form untuk mengedit materi
     */
    public function edit($id)
    {
        $materi = PengumpulanTugas::findOrFail($id);
        return view('Admin.update.edit_PengumpulanTugas', ['materi' => $materi]);
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

        PengumpulanTugas::create($request->all());

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

        $materi = PengumpulanTugas::findOrFail($id);
        $materi->update($request->all());

        return redirect()
            ->route('materi_pembelajaran')
            ->with('success', 'Materi berhasil diperbarui!');
    }

    public function delete($id)
    {
        try {
            $pengguna = PengumpulanTugas::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('materi_pembelajaran')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
