@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Merek Komputer</th>
                        <td>{{ $komputer->merek_komputer }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $komputer->jenis_komputer }}</td>
                    </tr>
                </table>
                <a href="{{ route('komputer.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
