@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center center-box">
        <h2 class="fw-bold">SEARCH PESANTREN</h2>
        <div class="d-flex justify-content-around mt-3">
            <a href="{{ route('provinsi') }}" class="btn btn-secondary">DAFTAR PROVINSI</a>
        </div>
    </div>
</div>
@endsection
