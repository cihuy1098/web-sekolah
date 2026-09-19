<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('admin.siswa', $data);
    }
    //
}
