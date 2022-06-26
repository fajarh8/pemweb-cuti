<?php

// Penanggung jawab : Odi

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    RiwayatCuti,
    JenisCuti,
    Pegawai,
};
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    public function ajukanCutiHTML(Request $request, Pegawai $pegawai)
    {
        $pegawai = Pegawai::where('id', Auth::guard('pegawai')->id())->get();
        // Auth::guard('pegawai')->user()->bisaCuti('tanggal_awl_cuti');
        
        return view('pegawai.cuti.ajukan', compact('pegawai'));
    }

    public function ajukanCutiDB(Request $request){
        $this->validate($request, [
            'tgl_awal_cuti' => 'required',
            'tgl_akhir_cuti' => 'required',
            'id_jenis_cuti' => 'required|integer',
        ]);

        if (Auth::guard('pegawai')->user()->bisaCuti($request->tgl_awal_cuti)){
            $ajukan = RiwayatCuti::create([
                'id_pegawai' => Auth::guard('pegawai')->id(),       
                'tgl_awal_cuti' => $request->tgl_awal_cuti,
                'tgl_akhir_cuti' => $request->tgl_akhir_cuti,
                'id_jenis_cuti' => $request->id_jenis_cuti,
                'status_cuti' => 'pending',
                'path_bukti_pengajuan' => ''
            ]);
            $ajukan->simpanBuktiPengajuan($request, 'surat-pengajuan');

            return redirect()
                ->route('pegawai.cuti.ajukan')
                ->with([
                    'status' => 'Cuti berhasil diajukan! Cek status pengajuan Anda secara berkala!'
                ]);
        }
        else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors([
                    'error' => 'Pengajuan cuti gagal! Coba lagi!'
                ]);
        }
    
    }

    public function riwayatCutiHTML(Request $request)
    {
        $riwayat_cuti = RiwayatCuti::where('id_pegawai', Auth::guard('pegawai')->id())->get();
        return view('pegawai.cuti.riwayat', compact('riwayat_cuti'));
    }

    public function statusCutiHTML(RiwayatCuti $cuti)
    {
        $warna['pending'] = 'bg-warning';
        $warna['rejected'] = 'bg-danger';
        $warna['approved'] = 'bg-success';

        return view('pegawai.cuti.status', compact('cuti', 'warna'));
    }
}
