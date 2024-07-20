@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('komputer.update', $komputer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-group">
                            <label>Merek Komputer</label>
                            <select name="merek_komputer" class="form-control" required>
                                <option value="Asus" {{ $komputer->merek_komputer == 'Asus' ? 'selected' : '' }}>ASUS</option>
                                <option value="Acer" {{ $komputer->merek_komputer == 'Acer' ? 'selected' : '' }}>ACER</option>
                                <option value="Lenovo" {{ $komputer->merek_komputer == 'Lenovo' ? 'selected' : '' }}>LENOVO</option>
                                <option value="Samsung" {{ $komputer->merek_komputer == 'Samsung' ? 'selected' : '' }}>SAMSUNG</option>
                                <option value="Apple" {{ $komputer->merek_komputer == 'Apple' ? 'selected' : '' }}>APPLE</option>
                            </select>
                        </div>
                        <div>
                        <label>Jenis Komputer</label>
                        <input type="text" name="jenis_komputer" class="form-control" value="{{ $komputer->jenis_komputer }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
