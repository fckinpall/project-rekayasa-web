@extends('admin.template')
@section('title', 'Halaman User')
@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5>Data User</h5>
                    <div class="d-flex gap-2">
                       <button class="btn btn-primary" id="btnAdd">Tambah Data</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered w-100" id="tb_user">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#tb_user').DataTable({
            ajax: {
                url: '{{ route("list-users") }}',
                dataSrc: "data",
                method: "GET",
                headers: {
                    'Authorization': 'Bearer ' + API_TOKEN
                }
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                { data: 'name' },
                { data: 'email' },
                { data: 'phone' },
                { data: 'address' },
                { data: 'role' },
                {
                    data: null,
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-warning btn-sm btn-edit" data-id="${row.id}">Edit</button>
                        <button class="btn btn-danger btn-sm btn-delete" data-id="${row.id}">Delete</button>
                    `;
                }
            }
            ],
            initComplete: function(settings, json) {
                if (json.message) {
                    toastr.success(json.message);
                }
            },
            error: function(xhr, error, thrown) {
                if (json.message) {
                    toastr.error(json.message);
                }
            }
        });
    });
</script>
@endpush