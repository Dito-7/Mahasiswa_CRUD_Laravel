@extends('layouts.main')

@section('content')
    <div class="p-3 mb-2" style="width: 200px;">
        <a class="m-5 p-3 btn btn-success btn-lg" href="{{ route('mahasiswa.create') }}">create</a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($mahasiswa as $item)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/' . $item['fotoDiri']) }}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h2 class="card-title">{{ $item['nim'] }}</h2>
                        <h3 class="card-text">{{ $item['nama'] }}</h3>

                        <br>
                        <p class="card-text">{{ $item['slug'] }}</p>
                        <p class="card-text">{{ $item['email'] }}</p>
                        <p class="card-text">{{ $item['noHp'] }}</p>
                        <p class="card-text">{{ $item['jurusan'] }}</p>

                        {{-- <a class="btn btn-danger" href="{{ route('mahasiswa.destroy', $item) }}">Delete</a> --}}

                        <form action="{{ route('mahasiswa.destroy', $item) }}" method="post">
                            @method('delete')
                            @csrf
                            <a class="btn btn-secondary" href="{{ route('mahasiswa.show', $item) }}">Read</a>
                            <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $item) }}">Update</a>

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure ?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
