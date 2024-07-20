@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Customer</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}" required>
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection