@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Keluhan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('keluhan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <textarea name="biaya" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
