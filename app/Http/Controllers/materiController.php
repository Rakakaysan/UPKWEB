<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\MateriPembelajaran;

class MateriController extends Controller
{
    /**
     * Menampilkan daftar materi pembelajaran
     */
    public function materi_pembelajaran()
    {
        $materi = MateriPembelajaran::all();
        return view('Admin.materi_pembelajaran', ['materi' => $materi]);
    }

    /**
     * Menampilkan form untuk membuat materi baru
     */
    public function CreateMateriPembelajaran()
    {
        return view('Admin.create.create_materiPembelajaran');
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
            ->route('materi.index')
            ->with('success', 'Materi berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit materi
     */
    public function EditMateriPembelajaran($id)
    {
        $materi = MateriPembelajaran::findOrFail($id);
        return view('Admin.create.edit_materiPembelajaran', ['materi' => $materi]);
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
            ->route('materi.index')
            ->with('success', 'Materi berhasil diperbarui!');
    }
}
