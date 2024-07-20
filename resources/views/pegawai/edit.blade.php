@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Pegawai</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" value="{{ $pegawai->nama_pegawai }}" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{ $pegawai->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control" required>
                            <option value="teknisi" {{ $pegawai->jabatan == 'teknisi' ? 'selected' : '' }}>Teknisi</option>
                            <option value="admin" {{ $pegawai->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="spy" {{ $pegawai->jabatan == 'spy' ? 'selected' : '' }}>Spy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="aktif" {{ $pegawai->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="tidak_aktif" {{ $pegawai->status == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
