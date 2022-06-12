<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function ajukanCutiHTML(Request $request)
    {
        return view('pegawai.cuti.ajukan');
    }

    public function riwayatCutiHTML(Request $request)
    {
        return view('pegawai.cuti.riwayat');
    }

    public function statusCutiHTML(Request $request, $cutiID)
    {
        return view('pegawai.cuti.status');
    }
}
