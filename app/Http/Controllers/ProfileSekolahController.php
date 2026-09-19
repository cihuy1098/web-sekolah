<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Profile Sekolah'
        ];
        return view('profil.index', $data);
    }
    //
}
