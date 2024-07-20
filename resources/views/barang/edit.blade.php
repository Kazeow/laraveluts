@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Barang</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select name="jenis_barang" class="form-control" required>
                            <option value="E" {{ $barang->jenis_barang == 'E' ? 'selected' : '' }}>ELEKTRONIK</option>
                            <option value="NE" {{ $barang->jenis_barang == 'NE' ? 'selected' : '' }}>NON-ELETRONIK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
