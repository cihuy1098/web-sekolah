<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();

        return view('admin.siswa.index', compact('siswa'));
    }

    public function eddEdit($id =null)
    {
        try {
            $siswa = $id
                ? Siswa::findOrFail(Crypt::decrypt($id))
                : null;
            } catch (\Exception $e) {
                return redirect()
                  ->route('admin.siswa.index')
                  ->with('error', 'Data siswa tidak ditemukan.');

            }

            return view('admin.siswa.form', $siswa ? compact('siswa') : []);
        }

    public function save(Request $request, $id = null)
    {
        if ($id){
            try {
                $id = Crypt::decrypt($id);
                $siswa = Siswa::findOrfail($id);
            } catch (\Exception $e) {
                return redirect() ->route('admin.siswa.index')->with('error', 'Data siswa tidak ditemukan.');
            }
        } else {
            $siswa = new Siswa();
        }

        $request->validate([
            'nisn'  => 'required|digits:10|unique:siswa,nisn,' . ($id ?? 'NULL'). 'id',
            'nama_siswa' => 'required|string|max:40',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tahun_masuk' => 'required|digits:4|integer',
        ], [
            'nisn.required'  => 'NISN wajib diisi.',
            'nisn.digits'  => 'NISN harus 10 digit angka.',
            'nisn.unique'  => 'NISN sudah  terdaftar pada siswa lain.',
            'nama_siswa.required'  => 'Nama siswa wajib diisi.',
            'jenis_kelamin.required'  => 'Pilih jenis kelamin.',
            'tahun_masuk.required'  => 'Tahun masuk wajib diisi',
            'tahun_masuk.required'  => 'Tahun masuk harus 4 digit angka (contoh: 2024).',

        ]);

        if ($id) {
            $siswa = Siswa::find($id);
        } else {
            $siswa = new Siswa();
        }

        $siswa->nisn  = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tahun_masuk = $request->tahun_masuk;

        $siswa->save();

        return redirect()
           ->route('admin.siswa.index')
           ->with('success', $id ? 'Data siswa berhasil diperbarui.' : 'Data siswa berhasil disimpan.');
           with('success', $id
           ? 'Data siswa berhasil diperbaharui.'
           : 'Data siswa berhasil disimpan.');
    }

    public function show($id)
    {
        try {
            $siwa = Siswa::findOrFail(Crypt:decrypt($id));
        } catch (\Exception $e) {
            return redirect()->route('admin.siswa.index')->with('error', 'Data siswa tidak ditemukan.');
        }

        return view('admin.siswa.show', compact('siswa'));
    }

    public function destroy($id)
    {
        try {
            $siswa = Siswa::findOrFail(Crypt::decrypt($id));
        } catch (\Exception $e) {
            return redirect()
               ->route('admin.siswa.index')
               ->with('error', 'Data siswa tidak ditemukan.');
        }

        $siswa->delete();

        return redirect()
           ->route('admin.siswa.index')
           ->with('succes', 'Data siswa berhasil dihapus.');
    }
}
