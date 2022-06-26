@extends('layouts.pegawai')

@section('title', 'Ajukan Cuti Pegawai')

@section('content')


<form method="POST" action="{{ route('pegawai.cuti.ajukan') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <h4>Pengajuan Cuti Pegawai</h4><br><br>
            <span class="line"></span>
            <div class="form-group col-12">
                @foreach ($pegawai as $pgw)
                <div>NIK : <strong>{{$pgw->nik}}</strong></div>
                <div>Nama : <strong>{{$pgw->nama}}</strong></div>
                @endforeach
            </div>
            <div class="form-group col-md-6">
                <label for="awal-cuti">Tanggal Awal Cuti</label>
                <input type="date" class="form-control" min="<?php echo date('Y-m-d');?>" @error('tgl_awal_cuti') is-invalid @enderror
                name="tgl_awal_cuti" value="{{ old('tgl_awal_cuti') }}">

                @error('tgl_awal_cuti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror       
            </div>
            <div class="form-group col-md-6">
                <label for="akhir-cuti">Tanggal Akhir Cuti</label>
                <input type="date" class="form-control" min="<?php echo date('Y-m-d');?>" @error('tgl_akhir_cuti') is-invalid @enderror
                name="tgl_akhir_cuti" value="{{ old('tgl_akhir_cuti') }}">

                @error('tgl_akhir_cuti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="alasan">Alasan Cuti</label>
            <div class="form-group col-md-12 input-group mb-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="height: 100%"><i class="bi bi-file-text"></i></span>
                </div>
                <select class="form-select form-select" aria-label=".form-select " style="text-align: center;"
                @error('id_jenis_cuti') is-invalid @enderror name="id_jenis_cuti" value="{{ old('id_jenis_cuti') }}">
                    <option hidden disabled selected>--Jenis Alasan Cuti--</option>
                    <option value="1">Cuti Tahunan</option>
                    <option value="2">Cuti Karena Alasan Penting</option>
                    <option value="3">Cuti Sakit</option>
                    <option value="4">Cuti Melahirkan</option>
                    <option value="5">Cuti Besar</option>
                    <option value="6">Cuti Di Luar Tanggungan Perusahaan</option>
                </select>
                @error('id_jenis_cuti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-12" style="margin-bottom:15px; margin-top:30px;">
                <label class="btn btn-primary" for="actual-button" style="font-size:17px"><i class="bi bi-upload"></i> Surat Pengajuan</label>
                <input type="file" id="actual-button" name="surat-pengajuan" hidden>
                <div id="file-chosen" style="font-size: 13px; color: rgba(0, 0, 0, 0.637);">No file chosen</div>
            </div>
            <br><br>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-success" style="font-size:18px">Ajukan</button>
            </div>
        </div>            
    </div>
</form>
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
    .form-group input, .form-group select {
        background-color: transparent;
    }
</style>

<script>
$(document).ready(function() {
    const actualBtn = document.getElementById('actual-button');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function(){
    fileChosen.textContent = this.files[0].name
    })
});
</script>

@endpush

