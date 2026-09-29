@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <h2>Selamat Datang</h2>
            <p>Website profile mahasiswa universitas pamulang</p>
            <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
            </div>
        </div>
    </div>
@endsection