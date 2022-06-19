<?php

// Penanggung jawab : Galih

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function tambahPegawaiHTML(Request $request)
    {
        return view('admin.pegawai.tambah');
    }

    public function listPegawaiHTML(Request $request)
    {
        $pegawai = Pegawai::get();
        return view('admin.pegawai.list', compact('pegawai'));
    }

    public function editPegawaiHTML(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'nama' => 'required|',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai->nama = $request['nama'];
        $pegawai->nik =  $request['nik'];
        $pegawai->jenis_kelamin =  $request['jenis_kelamin'];
        $pegawai->alamat =  $request['alamat'];
        $pegawai->save();

        barangkategori::where('id', $pegawai->id)->delete();
        
        return redirect()->route('admin.pegawai.list')->with('status', 'Berhasil menyimpan data');
    }
}
