@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <h2>Tentang Aplikasi</h2>
            <p>aplikasi ini adalah media belajar praktikum matakuliah rekayasa web</p>
            <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
            </div>
        </div>
    </div>
@endsection