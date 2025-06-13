<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\materiPembelajaran;

class MateriController extends Controller
{
    // view
    public function index()
    {
        $materi = materiPembelajaran::orderBy('nama_materi')->paginate(10);
        return view('admin.materi_pembelajaran', ['materi' => $materi]);
    }

    public function create()
    {
        return view('admin.create.create_materi_pembelajaran');
    }

    public function edit($id)
    {
        $materi = materiPembelajaran::findOrFail($id);
        return view('admin.update.edit_materi_pembelajaran', ['materi' => $materi]);
    }

    // actions
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

        materiPembelajaran::create($request->all());

        return redirect()
            ->route('materi_pembelajaran.index')
            ->with('success', 'Materi berhasil ditambahkan!');
    }

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

        $materi = materiPembelajaran::findOrFail($id);
        $materi->update($request->all());

        return redirect()
            ->route('materi_pembelajaran.index')
            ->with('success', 'Materi berhasil diperbarui!');
    }

    public function delete($id)
    {
        try {
            $pengguna = materiPembelajaran::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('materi_pembelajaran.index')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
