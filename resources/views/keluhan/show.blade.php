@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Keluhan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Keluhan</th>
                        <td>{{ $keluhan->keluhan }}</td>
                    </tr>
                    <tr>
                        <th>Biaya</th>
                        <td>{{ $keluhan->biaya }}</td>
                    </tr>
                </table>
                <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
