@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center center-box">
        <h2 class="fw-bold">SELAMAT DATANG DI WEB SEARCH PESANTREN</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="username" class="form-control text-center" placeholder="username" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection
