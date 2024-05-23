@extends('layouts.main')

@section('content')
    <form method="POST" enctype="multipart/form-data" action="/mahasiswa/{{ $mahasiswa->slug }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" min="0" class="form-control" id="nim" name="nim"
                value="{{ $mahasiswa->nim }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $mahasiswa->slug }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}">
        </div>
        <div class="mb-3">
            <label for="noHp" class="form-label">No Handphone</label>
            <input type="text" min="0" class="form-control" id="noHp" name="noHp"
                value="{{ $mahasiswa->noHp }}">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" min="0" class="form-control" id="jurusan" name="jurusan"
                value="{{ $mahasiswa->jurusan }}">
        </div>
        <div class="mb-3">
            <label for="fotoDiri" class="form-label">Foto Diri</label>
            <input type="file" name="fotoDiri" class="form-control" value="{{ $mahasiswa->fotoDiri }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
