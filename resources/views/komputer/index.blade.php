@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Komputer</h1>
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
                <a href="{{ route('komputer.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Merek Komputer</th>
                            <th scope="col">Jenis Komputer</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($komputers as $index => $komputer)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $komputer->merek_komputer }}</td>
                            <td>{{ $komputer->jenis_komputer }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('komputer.destroy', $komputer->id) }}" method="POST">
                                    <a href="{{ route('komputer.show', $komputer->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('komputer.edit', $komputer->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Komputer Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection