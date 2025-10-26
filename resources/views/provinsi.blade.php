@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-center mb-4">NAMA PROVINSI</h2>
<div class="container">
    <div class="row row-cols-1 row-cols-md-5 g-3">
        @foreach($provinsi as $p)
            <div class="col">
                <div class="card text-center shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="{{ route('kabupaten', $p['id']) }}" class="text-decoration-none fw-bold">
                            {{ $p['nama'] }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
