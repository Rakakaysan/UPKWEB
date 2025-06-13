<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TugasController extends Controller
{
    // view
    public function index()
    {
        $tugas = Tugas::orderBy('nama_tugas')->paginate(10);
        return view('admin.tugas', ['tugas' => $tugas]);
    }

    public function create()
    {
        return view('admin.create.create_tugas');
    }

    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        return view('admin.update.edit_tugas', ['tugas' => $tugas]);
    }

    // actions
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_tugas' => 'required|string|max:255',
            'deskripsi_tugas' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        Tugas::create([
            ...$request->all(),
            'tanggal_dibuat' => now(),
            'tanggal_diubah' => now(),
        ]);

        return redirect()
            ->route('tugas.index')
            ->with('success', 'tugas berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_tugas' => 'required|string|max:255',
            'deskripsi_tugas' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tugas = Tugas::findOrFail($id);
        $tugas->update([
            ...$request->all(),
            'tanggal_diubah' => now(),

        ]);

        return redirect()
            ->route('tugas.index')
            ->with('success', 'tugas berhasil diperbarui!');
    }

    public function delete($id)
    {
        try {
            $pengguna = Tugas::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('tugas.index')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
