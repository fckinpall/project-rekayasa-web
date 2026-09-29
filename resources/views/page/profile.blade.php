@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <h2 class="card-tittle mb-0">Profile Mahasiswa</h2>
                        <center><img src="{{ asset('images/hkajh.jpg') }}"
                        alt="profile image" class="img-fluid rounded-circle mt-3"
                        style="width: 150px; height: 150px; object-fit: cover;"></center>
                    </div>
                    <div class="card-body px-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nama:</strong> {{ $mahasiswa['nama'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>NIM:</strong> {{ $mahasiswa['nim'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection