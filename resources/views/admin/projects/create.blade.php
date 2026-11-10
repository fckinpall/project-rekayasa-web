@extends('admin.template')

@section('title', 'Tambah Project')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5>Tambah Data Project</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.projects.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">Judul Project</label>
                <input type="text" name="title"
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                          class="form-control"
                          rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" name="teknologi"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Project</label>
                <input type="file" name="image"
                       class="form-control"
                       accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('admin.projects.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>

@endsection