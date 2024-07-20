@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Keluhan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('keluhan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($keluhans as $index => $keluhan)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $keluhan->keluhan }}</td>
                            <td>{{ $keluhan->biaya }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('keluhan.destroy', $keluhan->id) }}" method="POST">
                                    <a href="{{ route('keluhan.show', $keluhan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('keluhan.edit', $keluhan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Keluhan Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
