@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
        <form action="{{ route('komputer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="merek_komputer">Merek Komputer</label>
            <select class="form-control" id="merek_komputer" name="merek_komputer" required>
                <option value="Asus">Asus</option>
                <option value="Acer">Acer</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Samsung">Samsung</option>
                <option value="Apple">Apple</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_komputer">Jenis Komputer</label>
            <input type="text" class="form-control" id="jenis_komputer" name="jenis_komputer" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
