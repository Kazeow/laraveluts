@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Barang</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select name="jenis_barang" class="form-control" required>
                            <option value="E">ELEKTRONIK</option>
                            <option value="NE">NON-ELEKTRONIK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
