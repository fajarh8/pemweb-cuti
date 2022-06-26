@extends('layouts.pegawai')

@section('title', 'Status Cuti Pegawai')

@section('content')

<div class="container">
    <div class="row">
        <h4>Status Cuti Pegawai</h4><br><br>
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
        <h4><span class="badge {{ $warna[$cuti->status_cuti] }} mt-5 mb-0"
            style="font-size: 21px">{{$cuti->status_cuti}}</span></h4> 
    </div>
</div>
@endsection

@push('header')

<style>
    .container{
        margin-top: 30px;
            border: solid 1px rgba(0, 0, 0, 0.267);
            padding: 40px;
            width: 400px;
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

