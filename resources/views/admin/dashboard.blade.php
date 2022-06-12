@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="pb-4">
    <h3>Pengajuan Cuti</h3>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-warning p-3 m-3">
                <h3>10</h3>
                <p>Pengajuan pending</p>
            </div>
        </div>
    </div>
</div>
<div class="pb-4">
    <h3>Statistik Cuti</h3>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti besar</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti tahunan</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti sakit</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti melahirkan</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti karena alasan penting</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="shadow bg-info p-3 m-3">
                <h3>30</h3>
                <p>Pengajuan cuti di luar tanggungan perusahaan</p>
            </div>
        </div>
    </div>
</div>
@endsection

