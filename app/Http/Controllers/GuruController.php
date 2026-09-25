<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('admin.guru', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip' => 'required|string|max:15',
            'mapel' => 'required|string|max:40',
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validate['foto'] = $request
            ->file('foto')
            ->store('guru', 'public');

        Guru::create($validate);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validate = $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip' => 'required|string|max:15',
            'mapel' => 'required|string|max:40',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {

            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }

            $validate['foto'] = $request
                ->file('foto')
                ->store('guru', 'public');
        } else {
            unset($validate['foto']);
        }

        $guru->update($validate);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }

        $guru->delete();

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil dihapuss.');
    }
}
