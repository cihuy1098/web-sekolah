<?php

namespace App\Http\Controllers;

use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function index()
    {
        $profile = ProfileSekolah::first();

        if (!$profile) {
            $profile = new ProfileSekolah();
        }

        return view('admin.profileSekolah', [
            'title' => 'Profile Sekolah',
            'profile' => $profile
        ]);
    }

    public function edit()
    {
        $profile = ProfileSekolah::first();

        if (!$profile) {
            $profile = new ProfileSekolah();
        }

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'npsn' => 'nullable|string|max:50',
            'kepala_sekolah' => 'nullable|string|max:255',
            'tahun_berdiri' => 'nullable|integer',
            'kontak' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'visi_misi' => 'nullable|string',
        ]);

        $profile = ProfileSekolah::first();

        if (!$profile) {
            $profile = new ProfileSekolah();
        }

        $profile->nama_sekolah = $request->nama_sekolah;
        $profile->npsn = $request->npsn;
        $profile->kepala_sekolah = $request->kepala_sekolah;
        $profile->tahun_berdiri = $request->tahun_berdiri;
        $profile->kontak = $request->kontak;
        $profile->alamat = $request->alamat;
        $profile->deskripsi = $request->deskripsi;
        $profile->visi_misi = $request->visi_misi;

        $profile->save();

        return redirect()
            ->route('admin.profile')
            ->with('success', 'Profile sekolah berhasil diperbarui.');
    }

    public function updatePhoto(Request $request)
{
    $request->validate([
        'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $profile = ProfileSekolah::first();

    if (!$profile) {
        $profile = new ProfileSekolah();
    }

    if ($request->hasFile('logo')) {
        $path = $request->file('logo')->store('profile', 'public');

        $profile->logo = $path;
        $profile->save();
    }

    return redirect()
        ->route('admin.profile')
        ->with('success', 'Foto profile berhasil diganti.');
}
}
