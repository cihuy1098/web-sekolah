<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin_app', $data);
    }

    public function indexPublic()
    {
        return view('admin_app');
    }
    //
}
