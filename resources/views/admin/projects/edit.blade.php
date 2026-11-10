@extends('admin.template')

@section('title', 'Edit Project')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5>Edit Project</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.projects.update', $project->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul Project</label>
                <input type="text" name="title"
                       class="form-control"
                       value="{{ $project->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                          class="form-control"
                          rows="4" required>{{ $project->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" name="teknologi"
                       class="form-control"
                       value="{{ $project->teknologi }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status"
                       class="form-control"
                       value="{{ $project->status }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Project</label>

                @if($project->image)
                    <br>
                    <img src="{{ asset('images/'.$project->image) }}"
                         width="100" class="img-thumbnail mb-2">
                @endif

                <input type="file" name="image"
                       class="form-control"
                       accept="image/*">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>
            </div>

            <button type="submit" class="btn btn-success">
                Perbarui
            </button>

            <a href="{{ route('admin.projects.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>
@endsection