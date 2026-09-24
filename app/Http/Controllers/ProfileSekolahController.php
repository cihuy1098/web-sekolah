<?php

namespace App\Http\Controllers;

use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function index()
    {
        $profileSekolah = ProfileSekolah::first();

        return view('admin.profileSekolah', [
            'title' => 'Profile Sekolah',
            'profileSekolah' => $profileSekolah
        ]);
    }
}