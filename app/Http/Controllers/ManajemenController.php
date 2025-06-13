<?php

namespace App\Http\Controllers;

use App\Models\ManajemenPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ManajemenController extends Controller
{
    // view
    public function index()
    {
        $pengguna = ManajemenPengguna::orderBy('nama_lengkap')->paginate(10);
        return view('admin.manajemen_pengguna', compact('pengguna'));
    }

    public function create()
    {
        return view('admin.create.create_manajemen_pengguna');
    }

    public function edit($id)
    {
        $pengguna = ManajemenPengguna::findOrFail($id);
        return view('admin.update.edit_manajemen_pengguna', compact('pengguna'));
    }

    // actions
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:manajemen_pengguna,nisn',
            'username' => 'required|string|max:255|unique:manajemen_pengguna,username',
            'jabatan' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            ManajemenPengguna::create([
                'id' => Str::uuid()->toString(),
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama_lengkap,
                'jabatan' => $request->jabatan,
                'status' => $request->status,
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('manajemen_pengguna.index')
                ->with('success', 'Akun pengguna berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal membuat akun: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:manajemen_pengguna,nisn,' . $id . ',id',
            'username' => 'required|string|max:255|unique:manajemen_pengguna,username,' . $id . ',id',
            'jabatan' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $pengguna = ManajemenPengguna::findOrFail($id);
            $data = $request->except('password_confirmation');

            if (!empty($data['password'])) {
                $data['password'] = bcrypt($data['password']);
            } else {
                unset($data['password']);
            }

            $pengguna->update($data);

            return redirect()->route('manajemen_pengguna.index')
                ->with('success', 'Data pengguna berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal mengupdate pengguna: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $pengguna = ManajemenPengguna::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('manajemen_pengguna.index')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
