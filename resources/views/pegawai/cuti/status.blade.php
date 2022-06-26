@extends('layouts.pegawai')

@section('title', 'Status Cuti Pegawai')

@section('content')

<div class="container">
    <div class="row">
        <h4>Status Cuti Pegawai</h4><br><br>
        <span class="line"></span>
        <div class="form-group col-12 mb-3" style="text-align: left">
            <div class="text-left">Waktu Pengajuan<span style="margin-left: 15px"></span>: <strong>{{$riwayat_cuti->created_at}}</strong></div>
            <div class="text-left">NIK<span style="margin-left: 112px"></span>: <strong>{{$pegawai->nik}}</strong></div>
            <div class="text-left">Nama<span style="margin-left: 96px" class="tab"></span>: <strong>{{$pegawai->nama}}</strong></div>
            <div class="text-left">Departemen<span style="margin-left: 50px"></span>: <strong>{{$departemen->nama}}</strong></div>
        </div>
        <span class="line"></span>
        <p style="font-size:18px">Pengajuan cuti Anda sebagai berikut :</p>
        <div class="form-group col-md-6">
            <label for="awal-cuti">Tanggal Awal Cuti</label>
            <div class="input-group mb-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="height: 100%"><i class="bi bi-calendar2"></i></span>
                </div>
                <input type="text" class="form-control" id="awal-cuti" name="tgl_awal_cuti"
                value="{{$cuti->tgl_awal_cuti}}" disabled style="font-size: 15px">
            </div>    
        </div>
        <div class="form-group col-md-6">
            <label for="awal-cuti">Tanggal Akhir Cuti</label>
            <div class="input-group mb-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="height: 100%"><i class="bi bi-calendar2-check"></i></span>
                </div>
                <input type="text" class="form-control" id="akhir-cuti" name="tgl_akhir_cuti"
                value="{{$cuti->tgl_akhir_cuti}}" disabled style="font-size: 15px">
            </div>    
        </div>
        <div class="form-group col-md-12" id="alasan">
            <label for="awal-cuti">Alasan Cuti</label>
            <div class="input-group mb-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="height: 100%"><i class="bi bi-file-text"></i></span>
                </div>
                <input type="text" class="form-control" id="alasan-cuti" disabled name="" value="{{$cuti->jenisCuti->nama}}">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="height: 100%"><i class="bi bi-file-text"></i></span>
                </div>
            </div>    
        </div>
        <div class="form-group col-md-12">
            <a href="{{ route('pegawai.cuti.status.buktipengajuan', ['cuti' => $cuti->id]) }}" target="_blank">
            <button type="submit" class="btn btn-primary" style="font-size:18px"><i class="bi bi-eye"></i> Bukti Pengajuan</button>
            </a>
        </div>
        <h4><span class="badge {{ $warna[$cuti->status_cuti] }} mt-2 mb-0"
            style="font-size: 20px; height:38px;">{{$cuti->status_cuti}}</span></h4> 
    </div>
</div>
@endsection

@push('header')

<style>
    .container{
        margin-top: 30px;
            border: solid 1px rgba(0, 0, 0, 0.267);
            padding: 40px;
            width: 430px;
            text-align: center;
            line-height: 2;
    }
    .line {
        display: inline-block;
        width: 100%;
        border-top: 0.2px solid rgba(0, 0, 0, 0.267);
        margin-bottom: 20px;
    }
    .form-group input{
        background-color: transparent;
        text-align: center;
    }
    #alasan {
        margin-bottom: 25px;
    }
</style>

@endpush

