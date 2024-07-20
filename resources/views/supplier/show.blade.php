@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Supplier</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Supplier</th>
                        <td>{{ $supplier->nama_supplier }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $supplier->alamat }}</td>
                    </tr>
                </table>
                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
