<?php

// Penanggung jawab : Galih

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function tambahPegawaiHTML(Request $request)
    {
        return view('admin.pegawai.tambah');
    }

    public function listPegawaiHTML(Request $request)
    {
        return view('admin.pegawai.list');
    }

    public function editPegawaiHTML(Request $request, $pegawaiID)
    {
        return view('admin.pegawai.edit');
    }
}
