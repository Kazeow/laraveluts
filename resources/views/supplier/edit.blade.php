@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Supplier</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('supplier.update', $pegawai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control" value="{{ $pegawai->nama_pegawai }}" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{ $supplier->alamat }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
