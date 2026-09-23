<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function index()
    {
        // $profileSekolah = ProfileSekolah::first();
        $data = [
            'title' => 'Profile Sekolah',
            // 'profileSekolah' =>
        ];
        return view('profil.index', $data);
    }
    //
}
