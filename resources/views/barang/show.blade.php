@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Barang</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Barang</th>
                        <td>{{ $barang->nama_barang }}</td>
                    <tr>
                        <th>Jenis Barang</th>
                        <td>{{ $barang->jenis_barang }}</td>
                    </tr>
                </table>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
