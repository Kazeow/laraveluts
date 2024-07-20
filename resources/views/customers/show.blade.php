@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Detail Customer</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
          <label>Nama</label>
          <p>{{ $customer->nama }}</p>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <p>{{ $customer->alamat }}</p>
        </div>
        <tr>
          <th>Jenis Kelamin</th>
          <td>{{ $pegawai->jenis_kelamin }}</td>
      </tr>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
