@extends('layouts.admin')

@section('title', 'Edit Pegawai')

@section('content')
<h1 class="display-6">Tambah/Edit Pegawai</h1>
<form class="row g-3 align-middle" style="margin-top: 30px;">
    <div class="card">
    <div class="form-floating col-12 mb-3" style="margin-top: 5px;">
        <input type="text" class="form-control" id="nama" placeholder="NAMA">
        <label for="nama">Nama</label>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="nik" placeholder="NIK">
                <label for="nik">NIK</label>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="form-floating">
                <select class="form-select" id="jkelamin" aria-label="JenisKelamin">
                  <option selected>-</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Perempuan</option>
                </select>
                <label for="floatingSelect">Jenis Kelamin</label>
            </div>
        </div>
    </div>
    <div class="form-floating col-12 mb-3">
        <input type="text" class="form-control" id="alamat" placeholder="ALAMAT">
        <label for="alamat">Alamat</label>
    </div>
</div>
</form>
<br>
<button class="btn btn-primary">Submit</button>
@endsection

