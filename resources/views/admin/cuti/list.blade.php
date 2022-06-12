@extends('layouts.admin')

@section('title', 'Pengajuan Cuti Pegawai')

@section('content')
<nav class="navbar navbar-expand">
    <div class="container-fluid navbar-brand">PENGAJUAN CUTI PEGAWAI</div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</nav>
<div class="container table-responsive">
    <table class="table table-striped table-hover">
      <thead class="table-dark text-center">
          <th>TGL PENGAJUAN</th>
          <th>NAMA</th>
          <th>DEPARTEMEN</th>
          <th>JENIS CUTI</th>
          <th>RENTANG CUTI</th>
          <th>STATUS</th>
          <th>DETAIL</th>
      </thead>
      <tbody class="text-center">
            <tr>
                <td>23 Januari 2022</td>
                <td>Joko Warsito</td>
                <td>CEO</td>
                <td>Cuti Di Luar Tanggungan Perusahaan</td>
                <td>22/2/2022 - 2/3/2022</td>
                <td>
                    <span class="badge bg-success">Approved</span>
                    <span class="badge bg-warning">Not Approved</span>
                    <span class="badge bg-danger">Rejected</span>
                </td>
                <td>
                    <a class="nav-menu" href="{{ route('admin.cuti.detail', ['cuti' => 'example']) }}"><i class="bi bi-eye btn-outline-primary"></i></a>
                </td>
            </tr>
      </tbody>
    </table>
</div>
@endsection
