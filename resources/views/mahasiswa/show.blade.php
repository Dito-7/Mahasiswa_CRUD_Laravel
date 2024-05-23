@extends('layouts.main')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $mahasiswa['fotoDiri']) }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h2 class="card-title">{{ $mahasiswa['nim'] }}</h2>
                    <h3 class="card-text">{{ $mahasiswa['nama'] }}</h3>

                    <br>
                    <p class="card-text">{{ $mahasiswa['slug'] }}</p>
                    <p class="card-text">{{ $mahasiswa['email'] }}</p>
                    <p class="card-text">{{ $mahasiswa['noHp'] }}</p>
                    <p class="card-text">{{ $mahasiswa['jurusan'] }}</p>
                    <a class="btn btn-primary" href="/mahasiswa">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
