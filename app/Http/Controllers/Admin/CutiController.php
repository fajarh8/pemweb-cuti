<?php

// Penanggung jawab : Fajar

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function buatCutiHTML(Request $request)
    {
        return view('admin.cuti.buat');
    }

    public function listCutiHTML(Request $request)
    {
        return view('admin.cuti.list');
    }

    public function detailCutiHTML(Request $request, $cutiID)
    {
        return view('admin.cuti.detail');
    }
}
