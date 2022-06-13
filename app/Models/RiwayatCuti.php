<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatCuti extends Model
{
    use HasFactory;

    protected $table = 'riwayat_cuti';

    protected $fillable = [
        'id_pegawai',
        'id_jenis_cuti',
        'status_cuti',
        'path_bukti_pengajuan',
        'tgl_awal_cuti',
        'tgl_akhir_cuti',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id');
    }

    public function jenisCuti()
    {
        return $this->belongsTo(JenisCuti::class, 'id_jenis_cuti', 'id');
    }
}
