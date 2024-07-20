@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Pegawai</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Pegawai</th>
                        <td>{{ $pegawai->nama_pegawai }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $pegawai->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $pegawai->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>{{ $pegawai->jabatan }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $pegawai->status }}</td>
                    </tr>
                </table>
                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
