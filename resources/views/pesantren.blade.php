@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-center mb-4">NAMA PESANTREN DARI KABUPATEN YANG DIPILIH</h2>
<div class="container">
    <div class="row row-cols-1 row-cols-md-5 g-3">
        @foreach($pesantren as $p)
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $p['nama'] }}</h5>
                        <p class="card-text"><strong>NSPP:</strong> {{ $p['nspp'] }}</p>
                        <p class="card-text"><strong>Alamat:</strong> {{ $p['alamat'] }}</p>
                        <p class="card-text"><strong>Kab/Kota:</strong> {{ $p['kab_kota']['nama'] ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
