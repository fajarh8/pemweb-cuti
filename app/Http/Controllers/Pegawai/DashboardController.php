<?php

// Penanggung jawab : Miko

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexHTML(Request $request)
    {
        return view('pegawai.dashboard');
    }
}
