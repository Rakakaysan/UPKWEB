<?php

namespace App\Http\Controllers;

use App\Models\ManajemenPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ManajemenController extends Controller
{
    public function manajemen_pengguna()
    {
        $pengguna = ManajemenPengguna::orderBy('nama_lengkap')->paginate(10);
        return view('Admin.manajemen_pengguna', compact('pengguna'));
    }

    public function edit($id)
    {
        $pengguna = ManajemenPengguna::findOrFail($id);
        return view('Admin.update.edit_manajemenPengguna', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:manajemenpengguna,nisn,' . $id . ',manajemen_id',
            'username' => 'required|string|max:255|unique:manajemenpengguna,username,' . $id . ',manajemen_id',
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

            return redirect()->route('manajemen_pengguna')
                ->with('success', 'Data pengguna berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal mengupdate pengguna: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:manajemenpengguna,nisn',
            'username' => 'required|string|max:255|unique:manajemenpengguna,username',
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
                'manajemen_id' => Str::uuid()->toString(),
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama_lengkap,
                'jabatan' => $request->jabatan,
                'status' => $request->status,
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('manajemen_pengguna')
                ->with('success', 'Akun pengguna berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal membuat akun: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function CreateManajemenPengguna()
    {
        return view('Admin.create.create_manajemenPengguna');
    }

    public function delete($id)
    {
        try {
            $pengguna = ManajemenPengguna::findOrFail($id);
            $pengguna->delete();

            return redirect()->route('manajemen_pengguna')
                ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }
}
