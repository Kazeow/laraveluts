@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Keluhan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('keluhan.update', $keluhan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" value="{{ $keluhan->keluhan }}" required>
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <textarea name="biaya" class="form-control" required>{{ $keluhan->biaya }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
